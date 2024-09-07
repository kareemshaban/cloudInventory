<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ExpensesController extends Controller
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
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expenses $expenses)
    {
        //
    }

    public function download()
    {
        try {
            $data = Expenses::all();

            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {
        try {


            $objs = Expenses::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocType' => $request->DocType,
                    'BillNo' => $request->BillNo,
                    'DocID' => $request->DocID,
                    'ExpensesDate' => $request->ExpensesDate,
                    'Entry' => $request->Entry,
                    'Details' => $request->Details,
                    'ExpensesAmount' => $request->Amount,
                    'ExpensesTypeID' => $request->ExpensesTypeID,
                    'ToFileId' => $request->ToFileId,
                    'approved' => $request->approved,
                    'with_tax' => $request->with_tax,
                    'taxRatio' => $request->taxRatio,
                    'taxAmount' => $request->taxAmount,
                    'nodeKey' => $request->nodeKey,
                    'invoiceNo' => $request->invoiceNo,
                    'vendorName' => $request->vendorName,
                    'vendorVatNo' => $request->vendorVatNo,
                    'UsrUpd' => $request->UsrUpd,
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                Expenses::create([
                    'DocType' => $request->DocType,
                    'BillNo' => $request->BillNo,
                    'DocID' => $request->DocID,
                    'ExpensesDate' => $request->ExpensesDate,
                    'Entry' => $request->Entry,
                    'Details' => $request->Details,
                    'ExpensesAmount' => $request->Amount,
                    'ExpensesTypeID' => $request->ExpensesTypeID,
                    'ToFileId' => $request->ToFileId,
                    'approved' => $request->approved,
                    'with_tax' => $request->with_tax,
                    'taxRatio' => $request->taxRatio,
                    'taxAmount' => $request->taxAmount,
                    'nodeKey' => $request->nodeKey,
                    'invoiceNo' => $request->invoiceNo,
                    'vendorName' => $request->vendorName,
                    'vendorVatNo' => $request->vendorVatNo,
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
