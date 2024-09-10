<?php

namespace App\Http\Controllers;

use App\Models\DocEffectDetails;
use App\Models\SalesBill;
use App\Models\SalesBillDetails;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SalesBillController extends Controller
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
    public function show(SalesBill $salesBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesBill $salesBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesBill $salesBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nodeKey)
    {
        $SalesBills = SalesBill::where('nodeKey', '= ', $nodeKey)->get();
        if(count($SalesBills)){
            $SalesBill = $SalesBills[0];
            $salesBillDetails = SalesBillDetails::where('SalesBillId', '=', $SalesBill->SalesBillId)->get();
            foreach( $salesBillDetails as  $salesBillDetail){
                $salesBillDetail ->delete();
            }
            $SalesBill ->delete();
            return response()->json(['state' => 'success', 'message' => 'Deleted Successfully']);
        } else {
            return response()->json(['state' => 'falied', 'message' => 'Record can nit fount ']);
        }
    }

    public function download()
    {
        try {
            $salesBills = SalesBill::all();
            foreach ($salesBills as $salesBill) {
                $salesBillDetails = SalesBillDetails::where('SalesBillId', '=', $salesBill->SalesBillId)->get();
                $effects = DocEffectDetails::where('DocEffiectDetailsBillId', '=', $salesBill->SalesBillId)
                    ->where('DocBasicID', '=', 6)->get();
                $salesBill->salesBillDetails = $salesBillDetails;
                $salesBill->effects = $effects;
            }
            return response()->json(['state' => 'success', 'salesBills' => $salesBills]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {

        try {
            $id = SalesBill::create([
                'DocType' => $request->DocType,
                'SalesBillNo' => $request->SalesBillNo,
                'DocID' => $request->DocID,
                'SalesBillVendorId' => $request->SalesBillVendorId,
                'StorId' => $request->StorId,
                'SalesBillWritingDate' => $request->SalesBillWritingDate,
                'SalesBillBillPayDate' => $request->SalesBillBillPayDate,
                'SalesBillNots' => $request->SalesBillNots,
                'CurrencyID' => $request->CurrencyID,
                'SalesBillBesadOn' => $request->SalesBillBesadOn,
                'SalesBillBesadOnId' => $request->SalesBillBesadOnId,
                'SalesBillBesadOnDocID' => $request->SalesBillBesadOnDocID,
                'SalesBillTotal' => $request->SalesBillTotal,
                'SalesBillPayed' => $request->SalesBillPayed,
                'SalesBillDiscount' => $request->SalesBillDiscount,
                'SalesBillCredit' => $request->SalesBillCredit,
                'SalesBillNet' => $request->SalesBillNet,
                'Approved' => $request->Approved,
                'returned' => $request->returned,
                'CarID' => $request->CarID,
                'TotalAddedValue' => $request->TotalAddedValue,
                'SellerCode' => $request->SellerCode,
                'nodeKey' => $request->nodeKey,
                'registrationNo' => $request->registrationNo,
                'vendorName' => $request->vendorName,
                'vendorBeforeBalance' => $request->vendorBeforeBalance,
                'vendorAfterBalance' => $request->vendorAfterBalance,
                'phoneNo' => $request->phoneNo,
                'address' => $request->address,
                'serviceTotal' => $request->serviceTotal,
                'serviceDiscount' => $request->serviceDiscount,
                'serviceVat' => $request->serviceVat,
                'serviceNet' => $request->serviceNet,
                'reponsibleId' => $request->reponsibleId,
                'delegatorId' => $request->delegatorId,
                'uploaded' => $request->uploaded,
                'second_note' => $request->second_note,
                'UsrIns' => $request->UsrIns,
                'TimIns' => Carbon::now()
            ])->SalesBillId;

            $this->insertBillDetails($request, $id);
            $this->insertDocEffectDetails($request, $id);

            return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }


    }

    public function insertBillDetails(Request $request, $id)
    {
        for ($i = 0; $i < count($request->salesBillDetails); $i++) {

            SalesBillDetails::create([
                'ItemId' => $request->salesBillDetails[$i]['ItemId'],
                'SalesBillId' => $id,
                'StoreId' => $request->salesBillDetails[$i]['StoreId'],
                'ItemUnit' => $request -> salesBillDetails[$i]['ItemUnit'],
                'ItemQuantity' => $request->salesBillDetails[$i]['ItemQuantity'],
                'ItemPrice' => $request->salesBillDetails[$i]['ItemPrice'],
                'ItemPercentageDiscount' => $request->salesBillDetails[$i]['ItemPercentageDiscount'],
                'ItemDiscount' => $request->salesBillDetails[$i]['ItemDiscount'],
                'ItemTotalRow' => $request->salesBillDetails[$i]['ItemTotalRow'],
                'ExpDate' => $request->salesBillDetails[$i]['ExpDate'],
                'ItemNots' => $request->salesBillDetails[$i]['ItemNots'],
                'DeliveryNO' => $request->salesBillDetails[$i]['DeliveryNO'],
                'ItemType' => $request->salesBillDetails[$i]['ItemType'],
                'addedValue' => $request->salesBillDetails[$i]['addedValue'],
                'cost' => $request->salesBillDetails[$i]['cost'],
                'ItemPriceWithAdded' => $request->salesBillDetails[$i]['ItemPriceWithAdded'],
                'stone' => $request->salesBillDetails[$i]['stone'],
                'serviceAmount' => $request->salesBillDetails[$i]['serviceAmount'],
                'QR' => $request->salesBillDetails[$i]['QR'],
                'weight' => $request->salesBillDetails[$i]['weight'],
                'UsrIns' => $request->salesBillDetails[$i]['UsrIns'],
                'TimIns' => Carbon::now(),
            ]);

        }
    }

    public function insertDocEffectDetails(Request $request, $id)
    {
        for ($i = 0; $i < count($request->effects); $i++) {

            DocEffectDetails::create([
                'DocEffiectDetailsBillId' => $id,
                'DocEffiectDetailsDate' => $request->effects[$i]['DocEffiectDetailsDate'],
                'DocEffiectDetailsAmount' => $request->effects[$i]['DocEffiectDetailsAmount'],
                'DocEffiectDetailsFileID' => $request->effects[$i]['DocEffiectDetailsFileID'],
                'DocEffiectDetailsType' => $request->effects[$i]['DocEffiectDetailsType'],
                'DocBasicID' => $request->effects[$i]['DocBasicID'],
                'UsrIns' => $request->effects[$i]['UsrIns'],
                'TimIns' => Carbon::now(),
            ]);

        }
    }
}
