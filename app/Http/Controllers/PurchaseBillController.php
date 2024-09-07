<?php

namespace App\Http\Controllers;

use App\Models\PurchaseBill;
use App\Models\PurchaseBillDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PurchaseBillController extends Controller
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
    public function show(PurchaseBill $purchaseBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseBill $purchaseBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaseBill $purchaseBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseBill $purchaseBill)
    {
        //
    }

    public function download()
    {
        try {
            $data = PurchaseBill::all();
            foreach ($data as $item) {
                $billDetails = PurchaseBillDetails::where('PurchaseBillId', '=', $item->PurchaseBillId)->get();

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
            $objs = PurchaseBill::where('nodeKey', '=', $request->nodeKey)->get();
            if (count($objs) > 0) {
                $obj = $objs[0];
                $obj->update([
                    'DocType' => $request->DocType,
                    'PurchaseBillNo' => $request->PurchaseBillNo,
                    'PurchaseBillVendorId' => $request->PurchaseBillVendorId,
                    'StorId' => $request->StorId,
                    'PurchaseBillWritingDate' => $request->PurchaseBillWritingDate,
                    'PurchaseBillNots' => $request->PurchaseBillNots,
                    'PurchaseBillPayDate' => $request->PurchaseBillPayDate,
                    'CurrencyID' => $request->CurrencyID,
                    'PurchaseBillBesadOn' => $request->PurchaseBillBesadOn,
                    'PurchaseBillBesadOnNO' => $request->PurchaseBillBesadOnNO,
                    'PurchaseBillBesadOnDOcID' => $request->PurchaseBillBesadOnDOcID,
                    'PurchaseBillTotal' => $request->PurchaseBillTotal,
                    'PurchaseBillPayed' => $request->PurchaseBillPayed,
                    'PurchaseBillDiscount' => $request->PurchaseBillDiscount,
                    'PurchaseBillCredit' => $request->PurchaseBillCredit,
                    'PurchaseBillNet' => $request->PurchaseBillNet,
                    'Approved' => $request->Approved,
                    'Returned' => $request->Returned,
                    'TotalAddedValue' => $request->TotalAddedValue,
                    'vendorInvoiceNo' => $request->vendorInvoiceNo,
                    'delivery_doc_no' => $request->delivery_doc_no,
                    'serviceTotal' => $request->serviceTotal,
                    'serviceDiscount' => $request->serviceDiscount,
                    'serviceVat' => $request->serviceVat,
                    'serviceNet' => $request->serviceNet,
                    'nodeKey' => $request->nodeKey,
                    'uploaded' => $request->uploaded,
                    'UsrUpd' => $request->UsrUpd,
                ]);
                $this->insertBillDetails($request, $obj->PurchaseBillId, 1);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);

            } else {
                $id = PurchaseBill::create([
                    'DocType' => $request->DocType,
                    'PurchaseBillNo' => $request->PurchaseBillNo,
                    'PurchaseBillVendorId' => $request->PurchaseBillVendorId,
                    'StorId' => $request->StorId,
                    'PurchaseBillWritingDate' => $request->PurchaseBillWritingDate,
                    'PurchaseBillNots' => $request->PurchaseBillNots,
                    'PurchaseBillPayDate' => $request->PurchaseBillPayDate,
                    'CurrencyID' => $request->CurrencyID,
                    'PurchaseBillBesadOn' => $request->PurchaseBillBesadOn,
                    'PurchaseBillBesadOnNO' => $request->PurchaseBillBesadOnNO,
                    'PurchaseBillBesadOnDOcID' => $request->PurchaseBillBesadOnDOcID,
                    'PurchaseBillTotal' => $request->PurchaseBillTotal,
                    'PurchaseBillPayed' => $request->PurchaseBillPayed,
                    'PurchaseBillDiscount' => $request->PurchaseBillDiscount,
                    'PurchaseBillCredit' => $request->PurchaseBillCredit,
                    'PurchaseBillNet' => $request->PurchaseBillNet,
                    'Approved' => $request->Approved,
                    'Returned' => $request->Returned,
                    'TotalAddedValue' => $request->TotalAddedValue,
                    'vendorInvoiceNo' => $request->vendorInvoiceNo,
                    'delivery_doc_no' => $request->delivery_doc_no,
                    'serviceTotal' => $request->serviceTotal,
                    'serviceDiscount' => $request->serviceDiscount,
                    'serviceVat' => $request->serviceVat,
                    'serviceNet' => $request->serviceNet,
                    'nodeKey' => $request->nodeKey,
                    'uploaded' => $request->uploaded,
                    'UsrIns' => $request->UsrIns,
                    'TimIns' => Carbon::now()
                ])->PurchaseBillId;
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
            $details = PurchaseBillDetails::where('PurchaseBillId', '=', $id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }
        }

        for ($i = 0; $i < count($request->billDetails); $i++) {
            PurchaseBillDetails::create([
                'PurchaseBillId' => $id,
                'ItemId' => $request->billDetails[$i]['ItemId'],
                'StoreId' => $request->billDetails[$i]['StoreId'],
                'ItemUnit' => $request->billDetails[$i]['ItemUnit'],
                'ItemQuantity' => $request->billDetails[$i]['ItemQuantity'],
                'ItemPrice' => $request->billDetails[$i]['ItemPrice'],
                'sellingPrice' => $request->billDetails[$i]['sellingPrice'],
                'ItemPercentageDiscount' => $request->billDetails[$i]['ItemPercentageDiscount'],
                'ItemDiscount' => $request->billDetails[$i]['ItemDiscount'],
                'PurchaseBilliItmTotalRow' => $request->billDetails[$i]['PurchaseBilliItmTotalRow'],
                'PurchaseBilliExpDate' => $request->billDetails[$i]['PurchaseBilliExpDate'],
                'PurchaseBillStartDate' => $request->billDetails[$i]['PurchaseBillStartDate'],
                'PurchaseBilliItmNots' => $request->billDetails[$i]['PurchaseBilliItmNots'],
                'DeliveryNO' => $request->billDetails[$i]['DeliveryNO'],
                'ItemType' => $request->billDetails[$i]['ItemType'],
                'addedValue' => $request->billDetails[$i]['addedValue'],
                'serviceAmount' => $request->billDetails[$i]['serviceAmount'],
                'serialNo' => $request->billDetails[$i]['serialNo'],
                'weight' => $request->billDetails[$i]['weight'],
                'fosos' => $request->billDetails[$i]['fosos'],
                'UsrIns' => $request->billDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now()
            ]);

        }
    }
}
