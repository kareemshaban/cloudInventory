<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use App\Models\Expenses;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ExchangeController extends Controller
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
    public function show(Exchange $exchange)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exchange $exchange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exchange $exchange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exchange $exchange)
    {
        //
    }

    public function download()
    {
        try {
            $data = Exchange::all();

            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {
        try {
            $objs = Exchange::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
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
                    'Collecter' => $request->Collecter,
                    'Approved' => $request->Approved,
                    'Patient' => $request->Patient,
                    'Company' => $request->Company,
                    'edited' => $request->edited,
                    'isRetrieved' => $request->isRetrieved,
                    'VendorBillNo' => $request->VendorBillNo,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrUpd,
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                Exchange::create([
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
                    'Collecter' => $request->Collecter,
                    'Approved' => $request->Approved,
                    'Patient' => $request->Patient,
                    'Company' => $request->Company,
                    'edited' => $request->edited,
                    'isRetrieved' => $request->isRetrieved,
                    'VendorBillNo' => $request->VendorBillNo,
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
