<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class VendorController extends Controller
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
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        if($vendor){
            $vendor ->delete();
            return response()->json(['state' => 'success', 'message' => 'Deleted Successfully']);
        } else {
            return response()->json(['state' => 'falied', 'message' => 'Record can nit fount ']);
        }
    }


    public function download()
    {
        try {
            $vendors = Vendor::all();
            return response()->json(['state' => 'success', 'vendors' => $vendors]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {

        try {
            $vendor = Vendor::find($request->VendorID);
            if ($vendor) {
                $vendor->update([
                    'VendorType' => $request->VendorType,
                    'Name' => $request->Name,
                    'NameEn' => $request->NameEn,
                    'SexType' => $request->SexType,
                    'BirthDay' => $request->BirthDay,
                    'AgeDay' => $request->AgeDay,
                    'AgeMonth' => $request->AgeMonth,
                    'AgeYear' => $request->AgeYear,
                    'SocialStatus' => $request->SocialStatus,
                    'Education' => $request -> Education ,
                    'job' => $request->job,
                    'WorkHours' => $request->WorkHours,
                    'Weekend' => $request->Weekend,
                    'Addresse' => $request->Addresse,
                    'NationalNo' => $request->NationalNo,
                    'PostalCode' => $request->PostalCode,
                    'Phone' => $request->Phone,
                    'PhoneTwo' => $request->PhoneTwo,
                    'Fax' => $request->Fax,
                    'Email' => $request->Email,
                    'Amount' => $request->Amount,
                    'City' => $request->City,
                    'Governorate' => $request->Governorate,
                    'Town' => $request->Town,
                    'Area' => $request->Area,
                    'street' => $request->street,
                    'house' => $request->house,
                    'homeNo' => $request->homeNo,
                    'Responsible' => $request->Responsible,
                    'ResponsibleSeller' => $request->ResponsibleSeller,
                    'RegisterationDate' => $request->RegisterationDate,
                    'InsuranceNO' => $request->InsuranceNO,
                    'InsuranceCompany' => $request->InsuranceCompany,
                    'InsuranceCompanyRatio' => $request->InsuranceCompanyRatio,
                    'RoomNo' => $request->RoomNo,
                    'ExitDate' => $request->ExitDate,
                    'DateLastSeen' => $request->DateLastSeen,
                    'Stress' => $request->Stress,
                    'Diabetes' => $request->Diabetes,
                    'Smoking' => $request->Smoking,
                    'Account' => $request->Account,
                    'basicType' => $request->basicType,
                    'CoastCenter' => $request->CoastCenter,
                    'OpeningBalance' => $request->OpeningBalance,
                    'IsCreditable' => $request->IsCreditable,
                    'InsuranceLimit' => $request->InsuranceLimit,
                    'InsuranceLimitRemain' => $request->InsuranceLimitRemain,
                    'InsurancePeriod' => $request->InsurancePeriod,
                    'InsurancePeriodFrom' => $request->InsurancePeriodFrom,
                    'InsurancePeriodTo' => $request->InsurancePeriodTo,
                    'PriceId' => $request->PriceId,
                    'DiscountPercentage' => $request->DiscountPercentage,
                    'FixedDiscount' => $request->FixedDiscount,
                    'BankAccount' => $request->BankAccount,
                    'Religion' => $request->Religion,
                    'PatientCode' => $request->PatientCode,
                    'PatientType' => $request->PatientType,
                    'PatientClass' => $request->PatientClass,
                    'FatherName' => $request->FatherName,
                    'GrandFatherName' => $request->GrandFatherName,
                    'FatherNameEn' => $request->FatherNameEn,
                    'GrandFatherNameEn' => $request->GrandFatherNameEn,
                    'NationalityID' => $request->NationalityID,
                    'ReligionID' => $request->ReligionID,
                    'PhoneRelatives' => $request->PhoneRelatives,
                    'mobile' => $request->mobile,
                    'DebtLimit' => $request->DebtLimit,
                    'Discount' => $request->Discount,
                    'InsuranceCardNO' => $request->InsuranceCardNO,
                    'Nots' => $request->Nots,
                    'Weight' => $request->Weight,
                    'Lenght' => $request->Lenght,
                    'BloodType' => $request->BloodType,
                    'openningBalance' => $request->openningBalance,
                    'currentBalance' => $request->currentBalance,
                    'NextSeen' => $request->NextSeen,
                    'Workplace' => $request->Workplace,
                    'firstCat' => $request->firstCat,
                    'secondCat' => $request->secondCat,
                    'thirdCat' => $request->thirdCat,
                    'commercialNo' => $request->commercialNo,
                    'TimUpd' => Carbon::now(),
                    'UsrUpd' => $request->UsrUpd
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            } else {
                Vendor::create([
                    'VendorID' => $request->VendorID,
                    'VendorType' => $request->VendorType,
                    'Name' => $request->Name,
                    'NameEn' => $request->NameEn,
                    'SexType' => $request->SexType,
                    'BirthDay' => $request->BirthDay,
                    'AgeDay' => $request->AgeDay,
                    'AgeMonth' => $request->AgeMonth,
                    'AgeYear' => $request->AgeYear,
                    'SocialStatus' => $request->SocialStatus,
                    'Education' => $request -> Education ,
                    'job' => $request->job,
                    'WorkHours' => $request->WorkHours,
                    'Weekend' => $request->Weekend,
                    'Addresse' => $request->Addresse,
                    'NationalNo' => $request->NationalNo,
                    'PostalCode' => $request->PostalCode,
                    'Phone' => $request->Phone,
                    'PhoneTwo' => $request->PhoneTwo,
                    'Fax' => $request->Fax,
                    'Email' => $request->Email,
                    'Amount' => $request->Amount,
                    'City' => $request->City,
                    'Governorate' => $request->Governorate,
                    'Town' => $request->Town,
                    'Area' => $request->Area,
                    'street' => $request->street,
                    'house' => $request->house,
                    'homeNo' => $request->homeNo,
                    'Responsible' => $request->Responsible,
                    'ResponsibleSeller' => $request->ResponsibleSeller,
                    'RegisterationDate' => $request->RegisterationDate,
                    'InsuranceNO' => $request->InsuranceNO,
                    'InsuranceCompany' => $request->InsuranceCompany,
                    'InsuranceCompanyRatio' => $request->InsuranceCompanyRatio,
                    'RoomNo' => $request->RoomNo,
                    'ExitDate' => $request->ExitDate,
                    'DateLastSeen' => $request->DateLastSeen,
                    'Stress' => $request->Stress,
                    'Diabetes' => $request->Diabetes,
                    'Smoking' => $request->Smoking,
                    'Account' => $request->Account,
                    'basicType' => $request->basicType,
                    'CoastCenter' => $request->CoastCenter,
                    'OpeningBalance' => $request->OpeningBalance,
                    'IsCreditable' => $request->IsCreditable,
                    'InsuranceLimit' => $request->InsuranceLimit,
                    'InsuranceLimitRemain' => $request->InsuranceLimitRemain,
                    'InsurancePeriod' => $request->InsurancePeriod,
                    'InsurancePeriodFrom' => $request->InsurancePeriodFrom,
                    'InsurancePeriodTo' => $request->InsurancePeriodTo,
                    'PriceId' => $request->PriceId,
                    'DiscountPercentage' => $request->DiscountPercentage,
                    'FixedDiscount' => $request->FixedDiscount,
                    'BankAccount' => $request->BankAccount,
                    'Religion' => $request->Religion,
                    'PatientCode' => $request->PatientCode,
                    'PatientType' => $request->PatientType,
                    'PatientClass' => $request->PatientClass,
                    'FatherName' => $request->FatherName,
                    'GrandFatherName' => $request->GrandFatherName,
                    'FatherNameEn' => $request->FatherNameEn,
                    'GrandFatherNameEn' => $request->GrandFatherNameEn,
                    'NationalityID' => $request->NationalityID,
                    'ReligionID' => $request->ReligionID,
                    'PhoneRelatives' => $request->PhoneRelatives,
                    'mobile' => $request->mobile,
                    'DebtLimit' => $request->DebtLimit,
                    'Discount' => $request->Discount,
                    'InsuranceCardNO' => $request->InsuranceCardNO,
                    'Nots' => $request->Nots,
                    'Weight' => $request->Weight,
                    'Lenght' => $request->Lenght,
                    'BloodType' => $request->BloodType,
                    'openningBalance' => $request->openningBalance,
                    'currentBalance' => $request->currentBalance,
                    'NextSeen' => $request->NextSeen,
                    'Workplace' => $request->Workplace,
                    'firstCat' => $request->firstCat,
                    'secondCat' => $request->secondCat,
                    'thirdCat' => $request->thirdCat,
                    'commercialNo' => $request->commercialNo,
                    'TimIns' => Carbon::now(),
                    'UsrIns' => $request->UsrIns
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Inserted Successfully']);
            }



        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);
        }

    }
}
