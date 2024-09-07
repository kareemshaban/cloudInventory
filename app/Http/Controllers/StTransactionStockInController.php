<?php

namespace App\Http\Controllers;

use App\Models\StTransactionStockIn;
use App\Models\StTransactionStockInDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StTransactionStockInController extends Controller
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
    public function show(StTransactionStockIn $stTransactionStockIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StTransactionStockIn $stTransactionStockIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StTransactionStockIn $stTransactionStockIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StTransactionStockIn $stTransactionStockIn)
    {
        //
    }


    public function download()
    {
        try {
            $data = StTransactionStockIn::all();
            foreach ($data as $item) {
                $salesBillDetails = StTransactionStockInDetails::where('TransactionID', '=', $item->TransactionID)->get();

                $item->salesBillDetails = $salesBillDetails;
            }
            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {

        try {

            $objs = StTransactionStockIn::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'StockID' => $request->StockID,
                    'DocNo' => $request->DocNo,
                    'Fixed' => $request->Fixed,
                    'BasedOn' => $request->BasedOn,
                    'BasedOnNO' => $request->BasedOnNO,
                    'BasedOnFixed' => $request->BasedOnFixed,
                    'DocTypeID' => $request->DocTypeID,
                    'SupplierID' => $request->SupplierID,
                    'EntryDate' => $request->EntryDate,
                    'Remarks' => $request->Remarks,
                    'isSystimatic' => $request->isSystimatic,
                    'approved' => $request->approved,
                    'isOpenning' => $request->isOpenning,
                    'nodeKey' => $request->nodeKey,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrIns,
                    'TimIns' => Carbon::now(),
                ]);
                $this->insertBillDetails($request, $obj->TransactionID, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = StTransactionStockIn::create([
                    'StockID' => $request->StockID,
                    'DocNo' => $request->DocNo,
                    'Fixed' => $request->Fixed,
                    'BasedOn' => $request->BasedOn,
                    'BasedOnNO' => $request->BasedOnNO,
                    'BasedOnFixed' => $request->BasedOnFixed,
                    'DocTypeID' => $request->DocTypeID,
                    'SupplierID' => $request->SupplierID,
                    'EntryDate' => $request->EntryDate,
                    'Remarks' => $request->Remarks,
                    'isSystimatic' => $request->isSystimatic,
                    'approved' => $request->approved,
                    'isOpenning' => $request->isOpenning,
                    'nodeKey' => $request->nodeKey,
                    'uploaded' => $request->uploaded,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now(),
                ])->TransactionID;
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
            $details = StTransactionStockInDetails::where('TransactionID', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }
        for ($i = 0; $i < count($request->salesBillDetails); $i++) {

            StTransactionStockInDetails::create([
                'TransactionID' => $id,
                'ItemID' => $request->salesBillDetails[$i]['ItemID'],
                'MeasureUnitID' => $request->salesBillDetails[$i]['MeasureUnitID'],
                'AmountValue' => $request->salesBillDetails[$i]['AmountValue'],
                'PriceValue' => $request->salesBillDetails[$i]['PriceValue'],
                'Quantity' => $request->salesBillDetails[$i]['Quantity'],
                'Notes' => $request->salesBillDetails[$i]['Notes'],
                'Code' => $request->salesBillDetails[$i]['Code'],
                'ExpiryDate' => $request->salesBillDetails[$i]['ExpiryDate'],
                'StockId' => $request->salesBillDetails[$i]['StockId'],
                'ItemType' => $request->salesBillDetails[$i]['ItemType'],
                'SN' => $request->salesBillDetails[$i]['SN'],
                'SalesPrice' => $request->salesBillDetails[$i]['SalesPrice'],
                'weight' => $request->salesBillDetails[$i]['weight'],
                'fosos' => $request->salesBillDetails[$i]['fosos'],
                'UsrIns' => $request->salesBillDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }


}
