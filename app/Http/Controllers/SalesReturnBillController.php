<?php

namespace App\Http\Controllers;

use App\Models\SalesReturnBill;
use App\Models\SalesReturnBillDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SalesReturnBillController extends Controller
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
    public function show(SalesReturnBill $salesReturnBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesReturnBill $salesReturnBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesReturnBill $salesReturnBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesReturnBill $salesReturnBill)
    {
        //
    }

    public function download()
    {
        try {
            $data = SalesReturnBill::all();
            foreach ($data as $item) {
                $salesReturnBillDetails = SalesReturnBillDetails::where('SalesReturnBillId', '=', $item->SalesReturnBillId)->get();

                $item->salesReturnBillDetails = $salesReturnBillDetails;
            }
            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {
        try {


            $objs = SalesReturnBill::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocType' => $request->DocType,
                    'SalesReturnBillNo' => $request->SalesReturnBillNo,
                    'DocID' => $request->DocID,
                    'SalesReturnBillVendorId' => $request->SalesReturnBillVendorId,
                    'StorId' => $request->StorId,
                    'SalesReturnBillWritingDate' => $request->SalesReturnBillWritingDate,
                    'SalesReturnBillNots' => $request->SalesReturnBillNots,
                    'SalesReturnBillBesadOn' => $request->SalesReturnBillBesadOn,
                    'SalesReturnBillBesadOnNO' => $request->SalesReturnBillBesadOnNO,
                    'SalesReturnBillBesadOnDcoID' => $request->SalesReturnBillBesadOnDcoID,
                    'SalesReturnBillTotal' => $request->SalesReturnBillTotal,
                    'SalesReturnBillPayed' => $request->SalesReturnBillPayed,
                    'SalesReturnBillDiscount' => $request->SalesReturnBillDiscount,
                    'SalesReturnBillCredit' => $request->SalesReturnBillCredit,
                    'SalesReturnBillNet' => $request->SalesReturnBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'returned' => $request->returned,
                    'TotalAddedValue' => $request->TotalAddedValue,
                    'sellerId' => $request->sellerId,
                    'nodeKey' => $request->nodeKey,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrUpd,
                ]);
                $this->insertBillDetails($request, $obj->SalesReturnBillId, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = SalesReturnBill::create([
                    'DocType' => $request->DocType,
                    'SalesReturnBillNo' => $request->SalesReturnBillNo,
                    'DocID' => $request->DocID,
                    'SalesReturnBillVendorId' => $request->SalesReturnBillVendorId,
                    'StorId' => $request->StorId,
                    'SalesReturnBillWritingDate' => $request->SalesReturnBillWritingDate,
                    'SalesReturnBillNots' => $request->SalesReturnBillNots,
                    'SalesReturnBillBesadOn' => $request->SalesReturnBillBesadOn,
                    'SalesReturnBillBesadOnNO' => $request->SalesReturnBillBesadOnNO,
                    'SalesReturnBillBesadOnDcoID' => $request->SalesReturnBillBesadOnDcoID,
                    'SalesReturnBillTotal' => $request->SalesReturnBillTotal,
                    'SalesReturnBillPayed' => $request->SalesReturnBillPayed,
                    'SalesReturnBillDiscount' => $request->SalesReturnBillDiscount,
                    'SalesReturnBillCredit' => $request->SalesReturnBillCredit,
                    'SalesReturnBillNet' => $request->SalesReturnBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'returned' => $request->returned,
                    'TotalAddedValue' => $request->TotalAddedValue,
                    'sellerId' => $request->sellerId,
                    'nodeKey' => $request->nodeKey,
                    'uploaded' => $request->uploaded,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ])->SalesReturnBillId;
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
            $details = SalesReturnBillDetails::where('SalesReturnBillId', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }

        for ($i = 0; $i < count($request->salesReturnBillDetails); $i++) {
            SalesReturnBillDetails::create([
                'SalesReturnBillId' => $id,
                'ItemId' => $request->salesReturnBillDetails[$i]['ItemId'],
                'StoreId' => $request->salesReturnBillDetails[$i]['StoreId'],
                'ItemUnit' => $request->salesReturnBillDetails[$i]['ItemUnit'],
                'ItemQuantity' => $request->salesReturnBillDetails[$i]['ItemQuantity'],
                'ItemPrice' => $request->salesReturnBillDetails[$i]['ItemPrice'],
                'ItemPercentageDiscount' => $request->salesReturnBillDetails[$i]['ItemPercentageDiscount'],
                'ItemDiscount' => $request->salesReturnBillDetails[$i]['ItemDiscount'],
                'IItemTotalRow' => $request->salesReturnBillDetails[$i]['IItemTotalRow'],
                'ExpDate' => $request->salesReturnBillDetails[$i]['ExpDate'],
                'ItetmNots' => $request->salesReturnBillDetails[$i]['ItetmNots'],
                'DeliveryNO' => $request->salesReturnBillDetails[$i]['DeliveryNO'],
                'ItemType' => 1,
                'addedValue' => $request->salesReturnBillDetails[$i]['addedValue'],
                'cost' => $request->salesReturnBillDetails[$i]['cost'],
                'ItemPriceWithAdded' => $request->salesReturnBillDetails[$i]['ItemPriceWithAdded'],
                'stone' => $request->salesReturnBillDetails[$i]['stone'],
                'QR' => $request->salesReturnBillDetails[$i]['QR'],
                'weight' => $request->salesReturnBillDetails[$i]['weight'],
                'UsrIns' => $request->salesReturnBillDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }
}
