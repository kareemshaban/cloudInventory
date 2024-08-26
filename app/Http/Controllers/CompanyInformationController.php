<?php

namespace App\Http\Controllers;

use App\Models\CompanyInformation;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CompanyInformationController extends Controller
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
    public function show(CompanyInformation $companyInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyInformation $companyInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyInformation $companyInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyInformation $companyInformation)
    {
        //
    }

    public function upload(Request $request)
    {

        try {
            $companyInfo = CompanyInformation::find($request->CompanyInformationID);
            if ($companyInfo) {
                $companyInfo->update([
                    'NameAR' => $request->NameAR,
                    'ShortNameAR' => $request->ShortNameAR,
                    'NameEn' => $request->NameEn,
                    'ShortNameEN' => $request->ShortNameEN,
                    'FullNameARFirst' => $request->FullNameARFirst,
                    'FullNameARSecond' => $request->FullNameARSecond,
                    'EndContractDate' => $request->EndContractDate,
                    'FullNameENFirst' => $request->FullNameENFirst,
                    'FullNameENSecond' => $request->FullNameENSecond,
                    'Owner' => $request->Owner,
                    'ActivityAR' => $request->ActivityAR,
                    'ActivityEN' => $request->ActivityAR,
                    'license' => $request->license,
                    'CommercialRegistration' => $request->CommercialRegistration,
                    'PhoneFirst' => $request->PhoneFirst,
                    'PhoneSecond' => $request->PhoneSecond,
                    'FaxFirst' => $request->FaxFirst,
                    'FaxSecond' => $request->FaxSecond,
                    'fut' => $request->fut,
                    'fut1' => $request->fut1,
                    'fut2' => $request->fut2,
                    'HospitalUniformNumber' => $request->HospitalUniformNumber,
                    'DB_Version' => $request->DB_Version,
                    'rasdUserName' => $request->rasdUserName,
                    'rasdPassword' => $request->rasdPassword,
                    'installDate' => $request->installDate,
                    'lastUpdateDate' => $request->lastUpdateDate,
                    'expiryDate' => $request->expiryDate,
                    'msg' => $request->msg,
                    'callCenter' => $request->callCenter,
                    'stopFirebaseOnly' => $request->stopFirebaseOnly,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now()
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Updated Successfully']);
            } else {
                CompanyInformation::create([
                    'CompanyInformationID' => $request->CompanyInformationID,
                    'NameAR' => $request->NameAR,
                    'ShortNameAR' => $request->ShortNameAR,
                    'NameEn' => $request->NameEn,
                    'ShortNameEN' => $request->ShortNameEN,
                    'FullNameARFirst' => $request->FullNameARFirst,
                    'FullNameARSecond' => $request->FullNameARSecond,
                    'FullNameENFirst' => $request->FullNameENFirst,
                    'FullNameENSecond' => $request->FullNameENSecond,
                    'Owner' => $request->Owner,
                    'ActivityAR' => $request->ActivityAR,
                    'ActivityEN' => $request->ActivityAR,
                    'license' => $request->license,
                    'CommercialRegistration' => $request->CommercialRegistration,
                    'PhoneFirst' => $request->PhoneFirst,
                    'PhoneSecond' => $request->PhoneSecond,
                    'FaxFirst' => $request->FaxFirst,
                    'FaxSecond' => $request->FaxSecond,
                    'fut' => $request->fut,
                    'fut1' => $request->fut1,
                    'fut2' => $request->fut2,
                    'HospitalUniformNumber' => $request->HospitalUniformNumber,
                    'DB_Version' => $request->DB_Version,
                    'rasdUserName' => $request->rasdUserName,
                    'rasdPassword' => $request->rasdPassword,
                    'installDate' => $request->installDate,
                    'lastUpdateDate' => $request->lastUpdateDate,
                    'expiryDate' => $request->expiryDate,
                    'msg' => $request->msg,
                    'callCenter' => $request->callCenter,
                    'stopFirebaseOnly' => $request->stopFirebaseOnly,
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
