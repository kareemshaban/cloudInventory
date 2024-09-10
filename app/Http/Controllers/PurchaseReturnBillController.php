<?php

namespace App\Http\Controllers;

use App\Models\PurchaseReturnBill;
use App\Models\PurchaseReturnBillDetails;
use Illuminate\Http\Request;

class PurchaseReturnBillController extends Controller
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
    public function show(PurchaseReturnBill $purchaseReturnBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseReturnBill $purchaseReturnBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaseReturnBill $purchaseReturnBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseReturnBill $purchaseReturnBill)
    {
        //
    }

    public function download()
    {
        try {
            $data = PurchaseReturnBill::all();
            foreach ($data as $item) {
                $billDetails = PurchaseReturnBillDetails::where('PurchaseReturnBillId', '=', $item->PurchaseReturnBillId)->get();

                $item->billDetails = $billDetails;
            }
            return response()->json(['state' => 'success', 'data' => $data]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {
    
        try {
            $objs = PurchaseReturnBill::where('PurchaseReturnBillNo' , '=' , $request -> PurchaseReturnBillNo)
            ->where('DocID' , '=' , $request -> DocID) -> get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj[0] -> update([
                    'DocType' => $request->DocType,
                    'PurchaseReturnBillNo' => $request->PurchaseReturnBillNo,
                    'DocID' => $request->DocID,
                    'PurchaseReturnBillVendorId' => $request->PurchaseReturnBillVendorId,
                    'StorId' => $request->StorId,
                    'PurchaseReturnBillWritingDate' => $request->PurchaseReturnBillWritingDate,
                    'PurchaseReturnBillNots' => $request->PurchaseReturnBillNots,
                    'PurchaseBillBesadOn' => $request->PurchaseBillBesadOn,
                    'PurchaseBillBesadOnNO' => $request->PurchaseBillBesadOnNO,
                    'PurchaseBillBesadOnDOcID' => $request->PurchaseBillBesadOnDOcID,
                    'PurchaseReturnBillPayed' => $request->PurchaseReturnBillPayed,
                    'PurchaseReturnBillDiscount' => $request->PurchaseReturnBillDiscount,
                    'PurchaseReturnBillCredit' => $request->PurchaseReturnBillCredit,
                    'PurchaseReturnBillNet' => $request->PurchaseReturnBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'returned' => $request->returned,
                    'TotalAddedValue' => $request->TotalAddedValue,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now()
                ]);
                $this->insertBillDetails($request, $obj -> PurchaseReturnBillId, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            } else {

            
      
                $id = PurchaseReturnBill::create([
                    'DocType' => $request->DocType,
                    'PurchaseReturnBillNo' => $request->PurchaseReturnBillNo,
                    'DocID' => $request->DocID,
                    'PurchaseReturnBillVendorId' => $request->PurchaseReturnBillVendorId,
                    'StorId' => $request->StorId,
                    'PurchaseReturnBillWritingDate' => $request->PurchaseReturnBillWritingDate,
                    'PurchaseReturnBillNots' => $request->PurchaseReturnBillNots,
                    'PurchaseBillBesadOn' => $request->PurchaseBillBesadOn,
                    'PurchaseBillBesadOnNO' => $request->PurchaseBillBesadOnNO,
                    'PurchaseBillBesadOnDOcID' => $request->PurchaseBillBesadOnDOcID,
                    'PurchaseReturnBillPayed' => $request->PurchaseReturnBillPayed,
                    'PurchaseReturnBillDiscount' => $request->PurchaseReturnBillDiscount,
                    'PurchaseReturnBillCredit' => $request->PurchaseReturnBillCredit,
                    'PurchaseReturnBillNet' => $request->PurchaseReturnBillNet,
                    'Approved' => $request->Approved,
                    'CurrencyID' => $request->CurrencyID,
                    'returned' => $request->returned,
                    'TotalAddedValue' => $request->TotalAddedValue,
                    'uploaded' => $request->uploaded,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ])->PurchaseReturnBillId;
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
            $details = PurchaseReturnBillDetails::where('PurchaseReturnBillId', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }
        for ($i = 0; $i < count($request->billDetails); $i++) {
            PurchaseReturnBillDetails::create([
                'PurchaseReturnBillId' => $id,
                'ItemId' => $request->billDetails[$i]['ItemId'],
                'StoreId' => $request->billDetails[$i]['StoreId'],
                'ItemUnit' => $request->billDetails[$i]['ItemUnit'],
                'ItemQuantity' => $request->billDetails[$i]['ItemQuantity'],
                'ItemPrice' => $request->billDetails[$i]['ItemPrice'],
                'ItemPercentageDiscount' => $request->billDetails[$i]['ItemPercentageDiscount'],
                'ItemDiscount' => $request->billDetails[$i]['ItemDiscount'],
                'PurchaseReturnBilliItmTotalRow' => $request->billDetails[$i]['PurchaseReturnBilliItmTotalRow'],
                'PurchaseReturnBilliExpDate' => $request->billDetails[$i]['PurchaseReturnBilliExpDate'],
                'PurchaseBilliExpDate' => $request->billDetails[$i]['PurchaseBilliExpDate'],
                'PurchaseReturnBilliItmNots' => $request->billDetails[$i]['PurchaseReturnBilliItmNots'],
                'DeliveryNO' => $request->billDetails[$i]['DeliveryNO'],
                'ItemType' => $request->billDetails[$i]['ItemType'],
                'addedValue' => $request->billDetails[$i]['addedValue'],
                'SN' => $request->billDetails[$i]['SN'],
                'TimIns' => Carbon::now()
            ]);

        }
    }
}
