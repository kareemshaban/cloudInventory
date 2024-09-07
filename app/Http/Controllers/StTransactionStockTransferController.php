<?php

namespace App\Http\Controllers;

use App\Models\StTransactionStockTransfer;
use App\Models\StTransactionStockTransferDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StTransactionStockTransferController extends Controller
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
    public function show(StTransactionStockTransfer $stTransactionStockTransfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StTransactionStockTransfer $stTransactionStockTransfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StTransactionStockTransfer $stTransactionStockTransfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StTransactionStockTransfer $stTransactionStockTransfer)
    {
        //
    }


    public function download()
    {
        try {
            $data = StTransactionStockTransfer::all();
            foreach ($data as $item) {
                $salesBillDetails = StTransactionStockTransferDetails::where('TransactionID', '=', $item->TransactionTransferID)->get();

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



            $objs = StTransactionStockTransfer::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocNo' => $request->DocNo,
                    'DocID' => $request->DocID,
                    'DocTypeID' => $request->DocTypeID,
                    'EntryDate' => $request->EntryDate,
                    'StoreFromID' => $request->StoreFromID,
                    'StoreToID' => $request->StoreToID,
                    'Remark' => $request->Remark,
                    'approved' => $request->approved,
                    'nodeKey' => $request->nodeKey,
                    'basedDoc' => $request->basedDoc,
                    'basedNo' => $request->basedNo,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ]);
                $this->insertBillDetails($request, $obj->TransactionTransferID, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = StTransactionStockTransfer::create([
                    'DocNo' => $request->DocNo,
                    'DocID' => $request->DocID,
                    'DocTypeID' => $request->DocTypeID,
                    'EntryDate' => $request->EntryDate,
                    'StoreFromID' => $request->StoreFromID,
                    'StoreToID' => $request->StoreToID,
                    'Remark' => $request->Remark,
                    'approved' => $request->approved,
                    'nodeKey' => $request->nodeKey,
                    'basedDoc' => $request->basedDoc,
                    'basedNo' => $request->basedNo,
                    'uploaded' => $request->uploaded,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ])->TransactionTransferID;
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
            $details = StTransactionStockTransferDetails::where('TransactionID', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }
        for ($i = 0; $i < count($request->salesBillDetails); $i++) {


            StTransactionStockTransferDetails::create([
                'TransactionID' => $id,
                'ItemID' => $request->salesBillDetails[$i]['ItemID'],
                'MeasureUnitID' => $request->salesBillDetails[$i]['MeasureUnitID'],
                'AmountValue' => $request->salesBillDetails[$i]['AmountValue'],
                'PriceValue' => $request->salesBillDetails[$i]['PriceValue'],
                'Quantity' => $request->salesBillDetails[$i]['Quantity'],
                'Patch' => $request->salesBillDetails[$i]['Patch'],
                'expiryDate' => $request->salesBillDetails[$i]['expiryDate'],
                'ExpiryDate' => $request->salesBillDetails[$i]['ExpiryDate'],
                'SN' => $request->salesBillDetails[$i]['SN'],
                'UsrIns' => $request->salesBillDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }

}
