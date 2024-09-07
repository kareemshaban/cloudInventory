<?php

namespace App\Http\Controllers;

use App\Models\SalesQuotationBill;
use App\Models\SalesQuotationBillDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SalesQuotationBillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SalesQuotationBill $salesQuotationBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesQuotationBill $salesQuotationBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesQuotationBill $salesQuotationBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesQuotationBill $salesQuotationBill)
    {
        //
    }

    public function download()
    {
        try {
            $data = SalesQuotationBill::all();
            foreach ($data as $item) {
                $orderDetails = SalesQuotationBillDetails::where('SalesQuotationBillId', '=', $item->SalesQuotationBillId)->get();

                $item->orderDetails = $orderDetails;
            }
            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {

        try {

            $objs = SalesQuotationBill::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocType' => $request->DocType,
                    'SalesQuotationBillNo' => $request->SalesQuotationBillNo,
                    'DocID' => $request->DocID,
                    'SalesQuotationBillVendorId' => $request->SalesQuotationBillVendorId,
                    'StorId' => $request->StorId,
                    'SalesQuotationBillWritingDate' => $request->SalesQuotationBillWritingDate,
                    'SalesQuotationBillNots' => $request->SalesQuotationBillNots,
                    'SalesQuotationBillTotal' => $request->SalesQuotationBillTotal,
                    'SalesQuotationBillPayed' => $request->SalesQuotationBillPayed,
                    'SalesQuotationBillDiscount' => $request->SalesQuotationBillDiscount,
                    'SalesQuotationBillCredit' => $request->SalesQuotationBillCredit,
                    'SalesQuotationBillNet' => $request->SalesQuotationBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'Returned' => $request->Returned,
                    'vendor_name' => $request->vendor_name,
                    'nodeKey' => $request->nodeKey,
                    'address' => $request->address,
                    'phone_no' => $request->phone_no,
                    'registration_no' => $request->registration_no,
                    'UsrUpd' => $request->UsrUpd,
                ]);
                $this->insertBillDetails($request, $obj->SalesQuotationBillId, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = SalesQuotationBill::create([
                    'DocType' => $request->DocType,
                    'SalesQuotationBillNo' => $request->SalesQuotationBillNo,
                    'DocID' => $request->DocID,
                    'SalesQuotationBillVendorId' => $request->SalesQuotationBillVendorId,
                    'StorId' => $request->StorId,
                    'SalesQuotationBillWritingDate' => $request->SalesQuotationBillWritingDate,
                    'SalesQuotationBillNots' => $request->SalesQuotationBillNots,
                    'SalesQuotationBillTotal' => $request->SalesQuotationBillTotal,
                    'SalesQuotationBillPayed' => $request->SalesQuotationBillPayed,
                    'SalesQuotationBillDiscount' => $request->SalesQuotationBillDiscount,
                    'SalesQuotationBillCredit' => $request->SalesQuotationBillCredit,
                    'SalesQuotationBillNet' => $request->SalesQuotationBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'Returned' => $request->Returned,
                    'vendor_name' => $request->vendor_name,
                    'nodeKey' => $request->nodeKey,
                    'address' => $request->address,
                    'phone_no' => $request->phone_no,
                    'registration_no' => $request->registration_no,
                    'UsrIns' => $request->UsrUpd,
                    'TimIns' => Carbon::now()
                ])->SalesQuotationBillId;
                $this->insertBillDetails($request, $id, 0);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            }



        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }


    }

    public function insertBillDetails(Request $request, $id, $isUpdate)
    {
        if ($isUpdate == 1) {
            $details = SalesQuotationBillDetails::where('SalesQuotationBillId', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }
        for ($i = 0; $i < count($request->orderDetails); $i++) {
            SalesQuotationBillDetails::create([
                'SalesQuotationBillId' => $id,
                'ItemId' => $request->orderDetails[$i]['ItemId'],
                'StoreId' => $request->orderDetails[$i]['StoreId'],
                'ItemUnit' => $request->orderDetails[$i]['ItemUnit'],
                'ItemQuantity' => $request->orderDetails[$i]['ItemQuantity'],
                'ItemPrice' => $request->orderDetails[$i]['ItemPrice'],
                'ItemPercentageDiscount' => $request->orderDetails[$i]['ItemPercentageDiscount'],
                'ItemDiscount' => $request->orderDetails[$i]['ItemDiscount'],
                'SalesQuotationBilliItmTotalRow' => $request->orderDetails[$i]['SalesQuotationBilliItmTotalRow'],
                'SalesQuotationBilliItmNots' => $request->orderDetails[$i]['SalesQuotationBilliItmNots'],
                'ItemType' => $request->orderDetails[$i]['ItemType'],
                'patch' => $request->orderDetails[$i]['patch'],
                'exp' => $request->orderDetails[$i]['exp'],
                'addedValue' => $request->orderDetails[$i]['addedValue'],
                'ItemPriceWithAdded' => $request->orderDetails[$i]['ItemPriceWithAdded'],
                'UsrIns' => $request->orderDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }
}
