<?php

namespace App\Http\Controllers;

use App\Models\DailyEntry;
use App\Models\DailyEntryDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DailyEntryController extends Controller
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
    public function show(DailyEntry $dailyEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailyEntry $dailyEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DailyEntry $dailyEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
  
     public function destroy($nodeKey)
     {
        $objs = DailyEntry::where('nodeKey', '=', $nodeKey)->get();
         if(count($objs)){
             $obj = $objs[0];
             $details = DailyEntryDetails::where('DailyEntryID', '=', $obj->DailyEntryID)->get();
             foreach( $details as  $detail){
                 $detail ->delete();
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
            $data = DailyEntry::all();
            foreach ($data as $item) {
                $details = DailyEntryDetails::where('DailyEntryID', '=', $item->DailyEntryID)->get();

                $item->details = $details;
            }
            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {
        try {
            $objs = DailyEntry::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocType' => $request->DocType,
                    'DocID' => $request->DocID,
                    'DailyEntryNo' => $request->DailyEntryNo,
                    'DailyEntryDateTime' => $request->DailyEntryDateTime,
                    'Description' => $request->Description,
                    'BasedONDocTypeID' => $request->BasedONDocTypeID,
                    'BasedONDocID' => $request->BasedONDocID,
                    'BasedONDocTypeNO' => $request->BasedONDocTypeNO,
                    'TotalCredit' => $request->TotalCredit,
                    'Difference' => $request->Difference,
                    'TotalDepit' => $request->TotalDepit,
                    'Approved' => $request->Approved,
                    'uploaded' => $request->uploaded,
                    'nodeKey' => $request->nodeKey,
                    'UsrUpd' => $request->UsrUpd,
                ]);
                $this->insertBillDetails($request, $obj->DailyEntryID, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = DailyEntry::create([
                    'DocType' => $request->DocType,
                    'DocID' => $request->DocID,
                    'DailyEntryNo' => $request->DailyEntryNo,
                    'DailyEntryDateTime' => $request->DailyEntryDateTime,
                    'Description' => $request->Description,
                    'BasedONDocTypeID' => $request->BasedONDocTypeID,
                    'BasedONDocID' => $request->BasedONDocID,
                    'BasedONDocTypeNO' => $request->BasedONDocTypeNO,
                    'TotalCredit' => $request->TotalCredit,
                    'Difference' => $request->Difference,
                    'TotalDepit' => $request->TotalDepit,
                    'Approved' => $request->Approved,
                    'uploaded' => $request->uploaded,
                    'nodeKey' => $request->nodeKey,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ])->DailyEntryID;
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
            $details = DailyEntryDetails::where('DailyEntryID', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }

        for ($i = 0; $i < count($request->details); $i++) {
            DailyEntryDetails::create([
                'DailyEntryID' => $id,
                'AccountsTree' => $request->details[$i]['AccountsTree'],
                'Notes' => $request->details[$i]['Notes'],
                'CreditAmount' => $request->details[$i]['CreditAmount'],
                'DepitAmount' => $request->details[$i]['DepitAmount'],
                'Currency' => $request->details[$i]['Currency'],
                'FirstCostCenter' => $request->details[$i]['FirstCostCenter'],
                'SecondCostCenter' => $request->details[$i]['SecondCostCenter'],
                'AcountType' => $request->details[$i]['AcountType'],
                'Ledger' => $request->details[$i]['Ledger'],
                'UsrIns' => $request->details[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }
}
