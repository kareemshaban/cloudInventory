<?php

namespace App\Http\Controllers;

use App\Models\Patch;
use App\Models\StItemCollections;
use App\Models\StItemMeasureUnits;
use App\Models\StItemPricePlanSystem;
use App\Models\StItems;
use App\Models\StItemsQuantity;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StItemsController extends Controller
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
    public function show(StItems $stItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StItems $stItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StItems $stItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = StItems::find($id) ;
        if($item){

            $measureUnits = StItemMeasureUnits::where('ItemID', '=', $item->ItemID)->get();
            $prices = StItemPricePlanSystem::where('ItemID', '=', $item->ItemID)->get();
            $patches = Patch::where('ItemID', '=', $item->ItemID)->get();
            $collections = STITemCollections::where('MainItemID', '=', $item->ItemID)->get();
            $stockQnts = StItemsQuantity::where('STItemsID', '=', $item->ItemID)->get();
            foreach( $measureUnits as  $measureUnit){
                $measureUnit ->delete();
            }
            foreach( $prices as  $price){
                $price ->delete();
            }
              foreach( $patches as  $patche){
                $patche ->delete();
            }
            foreach( $collections as  $collection){
                $collection ->delete();
            }
            foreach( $stockQnts as  $stockQnt){
                $stockQnt ->delete();
            }
            $item ->delete();
            return response()->json(['state' => 'success', 'message' => 'Deleted Successfully']);
        } else {
            return response()->json(['state' => 'falied', 'message' => 'Record can nit fount ']);
        }
    }


    public function download()
    {
        try {
            $items = StItems::all();
            foreach ($items as $item) {
                $measureUnits = StItemMeasureUnits::where('ItemID', '=', $item->ItemID)->get();
                $prices = StItemPricePlanSystem::where('ItemID', '=', $item->ItemID)->get();
                $patches = Patch::where('ItemID', '=', $item->ItemID)->get();
                $collections = STITemCollections::where('MainItemID', '=', $item->ItemID)->get();
                $stockQnts = StItemsQuantity::where('STItemsID', '=', $item->ItemID)->get();

                $item->measureUnits = $measureUnits;
                $item->prices = $prices;
                $item->patches = $patches;
                $item->collections = $collections;
                $item->stockQnts = $stockQnts;
            }
            return response()->json(['state' => 'success', 'items' => $items]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {

        try {
            $item = StItems::find($request->ItemID);
            if ($item) {

                $item->update([
                    'ItemID' => $request->ItemID,
                    'ItemNo' => $request->ItemNo,
                    'ItemCode_Ar' => $request->ItemCode_Ar,
                    'ItemCode_En' => $request->ItemCode_En,
                    'ItemName_Ar' => $request->ItemName_Ar,
                    'ItemName_En' => $request->ItemName_En,
                    'ItemTypeID' => $request->ItemTypeID,
                    'IsExpired' => $request->IsExpired,
                    'Status' => $request->Status,
                    'PeriodExpiredAlarm' => $request->PeriodExpiredAlarm,
                    'WarrantyPeriod' => $request->WarrantyPeriod,
                    'BasicGroup' => $request->BasicGroup,
                    'BranchGroup' => $request->BranchGroup,
                    'CategoryThreeId' => $request->CategoryThreeId,
                    'ItemVolume' => $request->ItemVolume,
                    'ItemSize' => $request->ItemSize,
                    'ItemColor' => $request->ItemColor,
                    'ItemWeight' => $request->ItemWeight,
                    'userId' => $request->userId,
                    'userGroupId' => $request->userGroupId,
                    'addedValue' => $request->addedValue,
                    'Concentration' => $request->Concentration,
                    'Notes' => $request->Notes,
                    'QR' => $request->QR,
                    'fast_item' => $request->fast_item,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ]);

                $this->insertUnits($request, 1);
                $this->insertPriceSystems($request, 1);
                $this->insertPatches($request, 1);
                $this->insertCollections($request, 1);
                $this->insertStockQuntities($request, 1);

            } else {

                StItems::create([
                    'ItemID' => $request->ItemID,
                    'ItemNo' => $request->ItemNo,
                    'ItemCode_Ar' => $request->ItemCode_Ar,
                    'ItemCode_En' => $request->ItemCode_En,
                    'ItemName_Ar' => $request->ItemName_Ar,
                    'ItemName_En' => $request->ItemName_En,
                    'ItemTypeID' => $request->ItemTypeID,
                    'IsExpired' => $request->IsExpired,
                    'Status' => $request->Status,
                    'PeriodExpiredAlarm' => $request->PeriodExpiredAlarm,
                    'WarrantyPeriod' => $request->WarrantyPeriod,
                    'BasicGroup' => $request->BasicGroup,
                    'BranchGroup' => $request->BranchGroup,
                    'CategoryThreeId' => $request->CategoryThreeId,
                    'ItemVolume' => $request->ItemVolume,
                    'ItemSize' => $request->ItemSize,
                    'ItemColor' => $request->ItemColor,
                    'ItemWeight' => $request->ItemWeight,
                    'userId' => $request->userId,
                    'userGroupId' => $request->userGroupId,
                    'addedValue' => $request->addedValue,
                    'Concentration' => $request->Concentration,
                    'Notes' => $request->Notes,
                    'QR' => $request->QR,
                    'fast_item' => $request->fast_item,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ]);

                $this->insertUnits($request, 0);
                $this->insertPriceSystems($request, 0);
                $this->insertPatches($request, 0);
                $this->insertCollections($request, 0);
                $this->insertStockQuntities($request, 0);
            }
            return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }


    }

    public function insertUnits(Request $request, $isUpdate)
    {
        if ($isUpdate == 1) {

            $units = StItemMeasureUnits::where('ItemID', '=', $request->ItemID)->get();
            foreach ($units as $unit) {
                $unit->delete();
            }

        }
        for ($i = 0; $i < count($request->measureUnits); $i++) {
            StItemMeasureUnits::create([
                'ItemID' => $request->measureUnits[$i]['ItemID'],
                'MeasureUnitID' => $request->measureUnits[$i]['MeasureUnitID'],
                'UnitLevel' => $request->measureUnits[$i]['UnitLevel'],
                'TransferFactor' => $request->measureUnits[$i]['TransferFactor'],
                'IsAutomaticPricing' => $request->measureUnits[$i]['IsAutomaticPricing'],
                'BarCode' => $request->measureUnits[$i]['BarCode'],
                'UsrIns' => $request->measureUnits[$i]['UsrIns'],
                'TimIns' => Carbon::now(),
            ]);
        }

    }

    public function insertPriceSystems(Request $request, $isUpdate)
    {
        if ($isUpdate == 1) {

            $prices = StItemPricePlanSystem::where('ItemID', '=', $request->ItemID)->get();
            foreach ($prices as $price) {
                $price->delete();
            }

        }
        for ($i = 0; $i < count($request->prices); $i++) {
            StItemPricePlanSystem::create([
                'ItemID' => $request->prices[$i]['ItemID'],
                'MeasureUnitID' => $request->prices[$i]['MeasureUnitID'],
                'PriceValue' => $request->prices[$i]['PriceValue'],
                'ToPriceValue' => $request->prices[$i]['ToPriceValue'],
                'PriceLevel' => $request->prices[$i]['PriceLevel'],
                'PriceSystemTypeID' => $request->prices[$i]['PriceSystemTypeID'],
                'DiscountPercentage' => $request->prices[$i]['DiscountPercentage'],
                'PriceValueWithAdded' => $request->prices[$i]['PriceValueWithAdded'],
                'UsrIns' => $request->prices[$i]['UsrIns'],
                'TimIns' => Carbon::now(),
            ]);
        }
    }

    public function insertPatches(Request $request, $isUpdate)
    {
        if ($isUpdate == 1) {

            $patches = Patch::where('ItemID', '=', $request->ItemID)->get();
            foreach ($patches as $patche) {
                $patche->delete();
            }

        }

        for ($i = 0; $i < count($request->patches); $i++) {
            Patch::create([
                'ItemID' => $request->patches[$i]['ItemID'],
                'PurchasePrice' => $request->patches[$i]['PurchasePrice'],
                'patch' => $request->patches[$i]['patch'],
                'ItemQuantity' => $request->patches[$i]['ItemQuantity'],
                'StoreId' => $request->patches[$i]['StoreId'],
                'ItemUnit' => $request->patches[$i]['ItemUnit'],
                'isExp' => $request->patches[$i]['isExp'],
                'patchOrder' => $request->patches[$i]['patchOrder'],
                'ExpDate' => $request->patches[$i]['ExpDate'],
                'StartDate' => $request->patches[$i]['StartDate'],
                'Salesprice' => $request->patches[$i]['Salesprice'],
                'ItemType' => $request->patches[$i]['ItemType'],
                'Alarm' => $request->patches[$i]['Alarm'],
                'UsrIns' => $request->patches[$i]['UsrIns'],
                'TimIns' => Carbon::now(),
            ]);
        }
    }

    public function insertCollections(Request $request, $isUpdate)
    {
        if ($isUpdate == 1) {
            $collections = STITemCollections::where('MainItemID', '=', $request->ItemID)->get();
            foreach ($collections as $collection) {
                $collection->delete();
            }

        }

        for ($i = 0; $i < count($request->collections); $i++) {
            StItemCollections::create([
                'MainItemID' => $request->collections[$i]['MainItemID'],
                'ItemID' => $request->collections[$i]['ItemID'],
                'MeasureUnitID' => $request->collections[$i]['MeasureUnitID'],
                'AmountValue' => $request->collections[$i]['AmountValue'],
                'TimIns' => Carbon::now(),
                'UsrIns' => $request->collections[$i]['UsrIns'],

            ]);
        }
    }
    public function insertStockQuntities(Request $request, $isUpdate)
    {

        if (count($request->stockQnts) > 0) {
            $stockQnts = StItemsQuantity::where('STItemsID', '=', $request->ItemID)->get();
            foreach ($stockQnts as $stockQnt) {
                $stockQnt->delete();
            }

        }

        for ($i = 0; $i < count($request->stockQnts); $i++) {
            StItemsQuantity::create([
                'LTStockID' => $request->stockQnts[$i]['StockId'],
                'STItemsID' => $request->ItemID,
                'STItemMeasureUnitsID' => $request->measureUnits[0]['MeasureUnitID'],
                'Quantity' => $request->stockQnts[$i]['Qnt'],
                'OldQuantity' => 0,
                'IsopenningQuantity' => 0,
                'TimIns' => Carbon::now(),
                'UsrIns' => $request->UsrIns,

            ]);
        }
    }

}
