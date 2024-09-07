<?php

namespace App\Http\Controllers;

use App\Models\SalesOrderBill;
use App\Models\SalesOrderBillDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SalesOrderBillController extends Controller
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
    public function show(SalesOrderBill $salesOrderBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesOrderBill $salesOrderBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesOrderBill $salesOrderBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesOrderBill $salesOrderBill)
    {
        //
    }

    public function download()
    {
        try {
            $data = SalesOrderBill::all();
            foreach ($data as $item) {
                $orderDetails = SalesOrderBillDetails::where('SalesOrderBillId', '=', $item->SalesOrderBillId)->get();

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

            $objs = SalesOrderBill::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocType' => $request->DocType,
                    'SalesOrderBillNo' => $request->SalesOrderBillNo,
                    'DocID' => $request->DocID,
                    'SalesOrderBillVendorId' => $request->SalesOrderBillVendorId,
                    'StorId' => $request->StorId,
                    'delieveryTime' => $request->delieveryTime,
                    'SalesOrderBillWritingDate' => $request->SalesOrderBillWritingDate,
                    'SalesOrderBillNots' => $request->SalesOrderBillNots,
                    'SalesOrderBillBesadOn' => $request->SalesOrderBillBesadOn,
                    'SalesOrderBillBesadOnNO' => $request->SalesOrderBillBesadOnNO,
                    'SalesOrderBillBesadOnDocID' => $request->SalesOrderBillBesadOnDocID,
                    'SalesOrderBillTotal' => $request->SalesOrderBillTotal,
                    'SalesOrderBillPayed' => $request->SalesOrderBillPayed,
                    'SalesOrderBillDiscount' => $request->SalesOrderBillDiscount,
                    'SalesOrderBillCredit' => $request->SalesOrderBillCredit,
                    'SalesOrderBillNet' => $request->SalesOrderBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'CarID' => $request->CarID,
                    'returned' => $request->returned,
                    'nodeKey' => $request->nodeKey,
                    'vendorName' => $request->vendorName,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'vat_no' => $request->vat_no,
                    'second_note' => $request->second_note,
                    'UsrUpd' => $request->UsrUpd,
                ]);
                $this->insertBillDetails($request, $obj->SalesOrderBillId, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = SalesOrderBill::create([
                    'DocType' => $request->DocType,
                    'SalesOrderBillNo' => $request->SalesOrderBillNo,
                    'DocID' => $request->DocID,
                    'SalesOrderBillVendorId' => $request->SalesOrderBillVendorId,
                    'StorId' => $request->StorId,
                    'delieveryTime' => $request->delieveryTime,
                    'SalesOrderBillWritingDate' => $request->SalesOrderBillWritingDate,
                    'SalesOrderBillNots' => $request->SalesOrderBillNots,
                    'SalesOrderBillBesadOn' => $request->SalesOrderBillBesadOn,
                    'SalesOrderBillBesadOnNO' => $request->SalesOrderBillBesadOnNO,
                    'SalesOrderBillBesadOnDocID' => $request->SalesOrderBillBesadOnDocID,
                    'SalesOrderBillTotal' => $request->SalesOrderBillTotal,
                    'SalesOrderBillPayed' => $request->SalesOrderBillPayed,
                    'SalesOrderBillDiscount' => $request->SalesOrderBillDiscount,
                    'SalesOrderBillCredit' => $request->SalesOrderBillCredit,
                    'SalesOrderBillNet' => $request->SalesOrderBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'CarID' => $request->CarID,
                    'returned' => $request->returned,
                    'nodeKey' => $request->nodeKey,
                    'vendorName' => $request->vendorName,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'vat_no' => $request->vat_no,
                    'second_note' => $request->second_note,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ])->SalesOrderBillId;
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
            $details = SalesOrderBillDetails::where('SalesOrderBillId', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }

        for ($i = 0; $i < count($request->orderDetails); $i++) {
            SalesOrderBillDetails::create([
                'SalesOrderBillId' => $id,
                'ItemId' => $request->orderDetails[$i]['ItemId'],
                'StoreId' => $request->orderDetails[$i]['StoreId'],
                'ItemUnit' => $request->orderDetails[$i]['ItemUnit'],
                'ItemQuantity' => $request->orderDetails[$i]['ItemQuantity'],
                'ItemPrice' => $request->orderDetails[$i]['ItemPrice'],
                'ItemPercentageDiscount' => $request->orderDetails[$i]['ItemPercentageDiscount'],
                'ItemDiscount' => $request->orderDetails[$i]['ItemDiscount'],
                'SalesOrderBilliItmTotalRow' => $request->orderDetails[$i]['SalesOrderBilliItmTotalRow'],
                'SalesOrderBilliItmNots' => $request->orderDetails[$i]['SalesOrderBilliItmNots'],
                'DeliveryNO' => $request->orderDetails[$i]['DeliveryNO'],
                'ItemType' => $request->orderDetails[$i]['ItemType'],
                'patch' => $request->orderDetails[$i]['patch'],
                'exp' => $request->orderDetails[$i]['exp'],
                'ItemPriceWithAdded' => $request->orderDetails[$i]['ItemPriceWithAdded'],
                'UsrIns' => $request->orderDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }
}
