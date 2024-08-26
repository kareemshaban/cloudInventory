<?php

namespace App\Http\Controllers;

use App\Models\CatchReceipt;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CatchReceiptController extends Controller
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
    public function show(CatchReceipt $catchReceipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatchReceipt $catchReceipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatchReceipt $catchReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatchReceipt $catchReceipt)
    {
        //
    }

    public function upload(Request $request)
    {

        try {
            $catchRecipit = CatchReceipt::find($request->node);
            if ($catchRecipit) {
                $catchRecipit->update([
                    'DocType' => $request->DocType,
                    'BillNo' => $request->BillNo,
                    'DocID' => $request->DocID,
                    'Date' => $request->Date,
                    'Vendor' => $request->Vendor,
                    'Entry' => $request->Entry,
                    'Details' => $request->Details,
                    'Amount' => $request->Amount,
                    'BankName' => $request->BankName,
                    'ChickNo' => $request->ChickNo,
                    'Payee' => $request->Payee,
                    'BankNotes' => $request->BankNotes,
                    'approved' => $request->approved,
                    'Collecter' => $request->Collecter,
                    'Patient' => $request->Patient,
                    'Company' => $request->Company,
                    'Cash' => $request->Cash,
                    'Cashier' => $request->Cashier,
                    'edited' => $request->edited,
                    'isRetrieved' => $request->isRetrieved,
                    'docNo' => $request->docNo,
                    'node' => $request->node,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now()
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Updated Successfully']);
            } else {
                CatchReceipt::create([
                    'ID' => $request->ID,
                    'DocType' => $request->DocType,
                    'BillNo' => $request->BillNo,
                    'DocID' => $request->DocID,
                    'Date' => $request->Date,
                    'Vendor' => $request->Vendor,
                    'Entry' => $request->Entry,
                    'Details' => $request->Details,
                    'Amount' => $request->Amount,
                    'BankName' => $request->BankName,
                    'ChickNo' => $request->ChickNo,
                    'Payee' => $request->Payee,
                    'BankNotes' => $request->BankNotes,
                    'approved' => $request->approved,
                    'Collecter' => $request->Collecter,
                    'Patient' => $request->Patient,
                    'Company' => $request->Company,
                    'Cash' => $request->Cash,
                    'Cashier' => $request->Cashier,
                    'edited' => $request->edited,
                    'isRetrieved' => $request->isRetrieved,
                    'docNo' => $request->docNo,
                    'node' => $request->node,
                    'uploaded' => $request->uploaded,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            }



        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }

    }
}
