<?php

namespace App\Http\Controllers;

use App\Models\StTransactionStockOut;
use App\Models\StTransactionStockOutDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StTransactionStockOutController extends Controller
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
    public function show(StTransactionStockOut $stTransactionStockOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StTransactionStockOut $stTransactionStockOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StTransactionStockOut $stTransactionStockOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nodeKey)
    {
        $objs = StTransactionStockOut::where('node', '=', $nodeKey)->get();
        if(count($objs)){
            $obj = $objs[0];
            $salesBillDetails = StTransactionStockOutDetails::where('TransactionID', '=', $obj->TransactionID)->get();
            foreach( $salesBillDetails as  $salesBillDetail){
                $salesBillDetail ->delete();
            }
            $obj ->delete();
            return response()->json(['state' => 'success', 'message' => 'Deleted Successfully']);
        } else {
            return response()->json(['state' => 'falied', 'message' => 'Record can nit fount ']);
        }
    }


    public function download()
    {
        try {
            $data = StTransactionStockOut::all();
            foreach ($data as $item) {
                $salesBillDetails = StTransactionStockOutDetails::where('TransactionID', '=', $item->TransactionID)->get();

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
            $objs = StTransactionStockOut::where('node', '=', $request->node)->get();
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
                    'node' => $request->node,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrIns,
                    'TimIns' => Carbon::now(),
                ]);
                $this->insertBillDetails($request, $obj->TransactionID, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = StTransactionStockOut::create([
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
                    'node' => $request->node,
                    'uploaded' => $request->uploaded,
                    'Dis' => $request->Dis,
                    'UsrUpd' => $request->UsrIns,
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
            $details = StTransactionStockOutDetails::where('TransactionID', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }
        for ($i = 0; $i < count($request->salesBillDetails); $i++) {
            StTransactionStockOutDetails::create([
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
                'Dis' => $request->salesBillDetails[$i]['Dis'],
                'UsrIns' => $request->salesBillDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }

}
