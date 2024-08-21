<?php

namespace App\Http\Controllers;

use App\Models\LtStock;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class LtStockController extends Controller
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
    public function show(LtStock $ltStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LtStock $ltStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LtStock $ltStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LtStock $ltStock)
    {
        //
    }

    public function upload(Request $request)
    {
        try {

            $stock = LtStock::find($request->StockID);
            if ($stock) {
                $stock->update([
                    'StockCode_Ar' => $request->StockCode_Ar,
                    'StockCode_En' => $request->StockCode_En,
                    'StockName_Ar' => $request->StockName_Ar,
                    'StockName_En' => $request->StockName_En,
                    'StockName_Ar_abs' => $request->StockName_Ar_abs,
                    'StockName_En_abs' => $request->StockName_En_abs,
                    'IsfrmInventoryAdjustment' => $request->IsfrmInventoryAdjustment,
                    'StockMaxCost' => $request->StockMaxCost,
                    'StockMaxPrice' => $request->StockMaxPrice,
                    'GLN' => $request->GLN,
                    'hamachi_db' => $request->hamachi_db,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now(),
                ]);
                return response()->json(['state' => 'success', 'message' => 'Data Updated Successfully']);

            } else {
                LtStock::create([
                    'StockID' => $request->StockID,
                    'StockCode_Ar' => $request->StockCode_Ar,
                    'StockCode_En' => $request->StockCode_En,
                    'StockName_Ar' => $request->StockName_Ar,
                    'StockName_En' => $request->StockName_En,
                    'StockName_Ar_abs' => $request->StockName_Ar_abs,
                    'StockName_En_abs' => $request->StockName_En_abs,
                    'IsfrmInventoryAdjustment' => $request->IsfrmInventoryAdjustment,
                    'StockMaxCost' => $request->StockMaxCost,
                    'StockMaxPrice' => $request->StockMaxPrice,
                    'GLN' => $request->GLN,
                    'hamachi_db' => $request->hamachi_db,
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
