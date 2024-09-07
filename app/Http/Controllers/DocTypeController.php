<?php

namespace App\Http\Controllers;

use App\Models\DocEffect;
use App\Models\DocType;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DocTypeController extends Controller
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
    public function show(DocType $docType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocType $docType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocType $docType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocType $docType)
    {
        //
    }

    public function download()
    {
        try {
            $docTypes = DocType::all();
            foreach ($docTypes as $docType) {
                $docEffects = DocEffect::where('DocEffectTYPE', '=', $docType->STDOCTypeID)->get();
                $docType->docEffects = $docEffects;
            }
            return response()->json(['state' => 'success', 'docTypes' => $docTypes]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {
        try {
            $docType = DocType::find($request->STDOCTypeID);
            if ($docType) {
                $docType->update([
                    'DOCTypeBasicID' => $request->DOCTypeBasicID,
                    'CodeEN' => $request->CodeEN,
                    'CodeAR' => $request->CodeAR,
                    'NameAR' => $request->NameAR,
                    'NameEN' => $request->NameEN,
                    'StockDockType' => $request->StockDockType,
                    'StockDock' => $request->StockDock,
                    'IsStockDoc' => $request->IsStockDoc,
                    'isAcc' => $request->isAcc,
                    'EntryType' => $request->EntryType,
                    'EntryDoc' => $request->EntryDoc,
                    'Doc' => $request->Doc,
                    'User' => $request->User,
                    'UserGroup' => $request->UserGroup,
                    'Stock' => $request->Stock,
                    'isOpenningQuantity' => $request->isOpenningQuantity,
                    'showMultiPayment' => $request->showMultiPayment,
                    'posType' => $request->posType,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now(),
                ]);

                $this->insertDocEffects($request);
                return response()->json(['state' => 'success', 'message' => 'Data Updated Successfully']);
            } else {
                DocType::create([
                    'STDOCTypeID' => $request->STDOCTypeID,
                    'DOCTypeBasicID' => $request->DOCTypeBasicID,
                    'CodeEN' => $request->CodeEN,
                    'CodeAR' => $request->CodeAR,
                    'NameAR' => $request->NameAR,
                    'NameEN' => $request->NameEN,
                    'StockDockType' => $request->StockDockType,
                    'StockDock' => $request->StockDock,
                    'IsStockDoc' => $request->IsStockDoc,
                    'isAcc' => $request->isAcc,
                    'EntryType' => $request->EntryType,
                    'EntryDoc' => $request->EntryDoc,
                    'Doc' => $request->Doc,
                    'User' => $request->User,
                    'UserGroup' => $request->UserGroup,
                    'Stock' => $request->Stock,
                    'isOpenningQuantity' => $request->isOpenningQuantity,
                    'showMultiPayment' => $request->showMultiPayment,
                    'posType' => $request->posType,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now(),
                ]);
                $this->insertDocEffects($request);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            }



        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }

    }

    public function insertDocEffects(Request $request)
    {
        for ($i = 0; $i < count($request->docEffects); $i++) {
            $effect = DocEffect::find($request->docEffects[$i]['DocEffectID']);
            if ($effect) {
                $effect->update([
                    'DocEffectDocID' => $request->docEffects[$i]['DocEffectDocID'],
                    'DocEffectTYPE' => $request->docEffects[$i]['DocEffectTYPE'],
                    'DocEffectFileID' => $request->docEffects[$i]['DocEffectFileID'],
                    'DocEffectFileID1' => $request->docEffects[$i]['DocEffectFileID1'],
                    'UsrUpd' => $request->docEffects[$i]['UsrUpd'],
                    'TimUpd' => Carbon::now(),
                ]);
            } else {
                DocEffect::create([
                    'DocEffectID' => $request->docEffects[$i]['DocEffectID'],
                    'DocEffectDocID' => $request->docEffects[$i]['DocEffectDocID'],
                    'DocEffectTYPE' => $request->docEffects[$i]['DocEffectTYPE'],
                    'DocEffectFileID' => $request->docEffects[$i]['DocEffectFileID'],
                    'DocEffectFileID1' => $request->docEffects[$i]['DocEffectFileID1'],
                    'UsrIns' => $request->docEffects[$i]['UsrUpd'],
                    'TimIns' => Carbon::now(),
                ]);

            }

        }


    }
}
