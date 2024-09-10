<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DocController extends Controller
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
    public function show(Doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doc $doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doc $doc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doc = Doc::find($id);
        if($doc){
            $doc ->delete();
            return response()->json(['state' => 'success', 'message' => 'Deleted Successfully']);
        } else {
            return response()->json(['state' => 'falied', 'message' => 'Record can nit fount ']);
        }
    }

    public function download()
    {
        try {
            $docs = Doc::all();
            return response()->json(['state' => 'success', 'docs' => $docs]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }


    public function upload(Request $request)
    {

        try {
            $doc = Doc::find($request->DocID);
            if ($doc) {
                $doc->update([
                    'DocTypeBasicId' => $request->DocTypeBasicId,
                    'FixedPart' => $request->FixedPart,
                    'DBCode' => $request->DBCode,
                    'DocNameEN' => $request->DocNameEN,
                    'DocNameAR' => $request->DocNameAR,
                    'UserGroup' => $request->UserGroup,
                    'User' => $request->User,
                    'Stock' => $request->Stock,
                    'onlySystemDoc' => $request->onlySystemDoc,
                    'IsAutomaticSerial' => $request->IsAutomaticSerial,
                    'NnoOfDigits' => $request->NnoOfDigits,
                    'FirstNo' => $request->FirstNo,
                    'LastNo' => $request->LastNo,
                    'migrateMethod' => $request->migrateMethod,
                    'printForm' => $request->printForm,
                    'printWithSave' => $request->printWithSave,
                    'SeveralPaymentWaysID' => $request->SeveralPaymentWaysID,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now(),
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            } else {
                Doc::create([
                    'DocID' => $request->DocID,
                    'DocTypeBasicId' => $request->DocTypeBasicId,
                    'FixedPart' => $request->FixedPart,
                    'DBCode' => $request->DBCode,
                    'DocNameEN' => $request->DocNameEN,
                    'DocNameAR' => $request->DocNameAR,
                    'UserGroup' => $request->UserGroup,
                    'User' => $request->User,
                    'Stock' => $request->Stock,
                    'onlySystemDoc' => $request->onlySystemDoc,
                    'IsAutomaticSerial' => $request->IsAutomaticSerial,
                    'NnoOfDigits' => $request->NnoOfDigits,
                    'FirstNo' => $request->FirstNo,
                    'LastNo' => $request->LastNo,
                    'migrateMethod' => $request->migrateMethod,
                    'printForm' => $request->printForm,
                    'printWithSave' => $request->printWithSave,
                    'SeveralPaymentWaysID' => $request->SeveralPaymentWaysID,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now(),
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            }



        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }

    }
}
