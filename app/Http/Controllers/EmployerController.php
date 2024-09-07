<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EmployerController extends Controller
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
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        //
    }

    public function download()
    {
        try {
            $employers = Employer::all();
            return response()->json(['state' => 'success', 'employers' => $employers]);


        } catch (QueryException $ex) {
            return response()->json(['state' => 'failed', 'message' => $ex->getMessage()]);

        }
    }

    public function upload(Request $request)
    {

        try {
            $employeer = Employer::find($request->EmployerID);
            if ($employeer) {
                $employeer->update([
                    'Departement' => $request->Departement,
                    'Name' => $request->Name,
                    'NameEn' => $request->NameEn,
                    'Religion' => $request->Religion,
                    'SexType' => $request->SexType,
                    'BirthDay' => $request->BirthDay,
                    'SocialStatus' => $request->SocialStatus,
                    'NationalityID' => $request->NationalityID,
                    'SonNO' => $request->SonNO,
                    'Education' => $request->Education,
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
                    'FamilyAddresse' => $request->FamilyAddresse,
                    'AccommodationNo' => $request->AccommodationNo,
                    'AccommodationEdit' => $request->AccommodationEdit,
                    'AccommodationFinish' => $request->AccommodationFinish,
                    'passportNo' => $request->passportNo,
                    'passportEdit' => $request->passportEdit,
                    'passportFinish' => $request->passportFinish,
                    'Auto' => $request->Auto,
                    'DrivingLicenseNo' => $request->DrivingLicenseNo,
                    'DrivingLicenseFinish' => $request->DrivingLicenseFinish,
                    'isCollector' => $request->isCollector,
                    'Account' => $request->Account,
                    'CommissionAndFees' => $request->CommissionAndFees,
                    'CategorySalary' => $request->CategorySalary,
                    'CreditLimit' => $request->CreditLimit,
                    'LedgerId' => $request->LedgerId,
                    'AdvancesId' => $request->AdvancesId,
                    'CustodyId' => $request->CustodyId,
                    'EmpOneID' => $request->EmpOneID,
                    'EmpTwoID' => $request->EmpTwoID,
                    'EmpThreeID' => $request->EmpThreeID,
                    'IssuingTheSalaryBond' => $request->IssuingTheSalaryBond,
                    'CalculateTheratesOfPayAutomatically' => $request->CalculateTheratesOfPayAutomatically,
                    'DistributionOfSalaryValue' => $request->DistributionOfSalaryValue,
                    'Salaryintervals' => $request->Salaryintervals,
                    'CurrencyOfSalary' => $request->CurrencyOfSalary,
                    'FileOfPayroll' => $request->FileOfPayroll,
                    'Bank' => $request->Bank,
                    'NumberOfBankAccount' => $request->NumberOfBankAccount,
                    'BasicSalary' => $request->BasicSalary,
                    'AccommodationAllowance' => $request->AccommodationAllowance,
                    'TransitionAllowance' => $request->TransitionAllowance,
                    'WorkAllowace' => $request->WorkAllowace,
                    'SocialAllowace' => $request->SocialAllowace,
                    'PayDay' => $request->PayDay,
                    'PayHour' => $request->PayHour,
                    'TotalPayOfday' => $request->TotalPayOfday,
                    'TotalPayOfHour' => $request->TotalPayOfHour,
                    'HealthInsuranceNo' => $request->HealthInsuranceNo,
                    'HealthInsuranceEdit' => $request->HealthInsuranceEdit,
                    'HealthInsuranceFinish' => $request->HealthInsuranceFinish,
                    'VacationTime' => $request->VacationTime,
                    'AnnualLeavelDue' => $request->AnnualLeavelDue,
                    'CasualLeaveDue' => $request->CasualLeaveDue,
                    'CalculatingAnnualLeaveMethodID' => $request->CalculatingAnnualLeaveMethodID,
                    'CalculatingCasualLeaveMethodID' => $request->CalculatingCasualLeaveMethodID,
                    'LastAccountVacation' => $request->LastAccountVacation,
                    'AnnualLeaveBalance' => $request->AnnualLeaveBalance,
                    'BalanceOfCasualLeave' => $request->BalanceOfCasualLeave,
                    'MaximumNumberOfLeave' => $request->MaximumNumberOfLeave,
                    'ContractType' => $request->ContractType,
                    'WorkType' => $request->WorkType,
                    'ServiceLeaveEntitlements' => $request->ServiceLeaveEntitlements,
                    'BeginingOfDecade' => $request->BeginingOfDecade,
                    'EndOfDecade' => $request->EndOfDecade,
                    'StartingDate' => $request->StartingDate,
                    'SocialSecurityNumber' => $request->SocialSecurityNumber,
                    'HealthInsuranceNumber' => $request->HealthInsuranceNumber,
                    'EndOfHealthInsurance' => $request->EndOfHealthInsurance,
                    'TheUnion' => $request->TheUnion,
                    'MilitaryService' => $request->MilitaryService,
                    'UsrUpd' => $request->UsrUpd,
                    'TimUpd' => Carbon::now()
                ]);

                return response()->json(['state' => 'success', 'message' => 'Data Updated Successfully']);
            } else {
                Employer::create([
                    'EmployerID' => $request->EmployerID,
                    'Departement' => $request->Departement,
                    'Name' => $request->Name,
                    'NameEn' => $request->NameEn,
                    'Religion' => $request->Religion,
                    'SexType' => $request->SexType,
                    'BirthDay' => $request->BirthDay,
                    'SocialStatus' => $request->SocialStatus,
                    'NationalityID' => $request->NationalityID,
                    'SonNO' => $request->SonNO,
                    'Education' => $request->Education,
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
                    'FamilyAddresse' => $request->FamilyAddresse,
                    'AccommodationNo' => $request->AccommodationNo,
                    'AccommodationEdit' => $request->AccommodationEdit,
                    'AccommodationFinish' => $request->AccommodationFinish,
                    'passportNo' => $request->passportNo,
                    'passportEdit' => $request->passportEdit,
                    'passportFinish' => $request->passportFinish,
                    'Auto' => $request->Auto,
                    'DrivingLicenseNo' => $request->DrivingLicenseNo,
                    'DrivingLicenseFinish' => $request->DrivingLicenseFinish,
                    'isCollector' => $request->isCollector,
                    'Account' => $request->Account,
                    'CommissionAndFees' => $request->CommissionAndFees,
                    'CategorySalary' => $request->CategorySalary,
                    'CreditLimit' => $request->CreditLimit,
                    'LedgerId' => $request->LedgerId,
                    'AdvancesId' => $request->AdvancesId,
                    'CustodyId' => $request->CustodyId,
                    'EmpOneID' => $request->EmpOneID,
                    'EmpTwoID' => $request->EmpTwoID,
                    'EmpThreeID' => $request->EmpThreeID,
                    'IssuingTheSalaryBond' => $request->IssuingTheSalaryBond,
                    'CalculateTheratesOfPayAutomatically' => $request->CalculateTheratesOfPayAutomatically,
                    'DistributionOfSalaryValue' => $request->DistributionOfSalaryValue,
                    'Salaryintervals' => $request->Salaryintervals,
                    'CurrencyOfSalary' => $request->CurrencyOfSalary,
                    'FileOfPayroll' => $request->FileOfPayroll,
                    'Bank' => $request->Bank,
                    'NumberOfBankAccount' => $request->NumberOfBankAccount,
                    'BasicSalary' => $request->BasicSalary,
                    'AccommodationAllowance' => $request->AccommodationAllowance,
                    'TransitionAllowance' => $request->TransitionAllowance,
                    'WorkAllowace' => $request->WorkAllowace,
                    'SocialAllowace' => $request->SocialAllowace,
                    'PayDay' => $request->PayDay,
                    'PayHour' => $request->PayHour,
                    'TotalPayOfday' => $request->TotalPayOfday,
                    'TotalPayOfHour' => $request->TotalPayOfHour,
                    'HealthInsuranceNo' => $request->HealthInsuranceNo,
                    'HealthInsuranceEdit' => $request->HealthInsuranceEdit,
                    'HealthInsuranceFinish' => $request->HealthInsuranceFinish,
                    'VacationTime' => $request->VacationTime,
                    'AnnualLeavelDue' => $request->AnnualLeavelDue,
                    'CasualLeaveDue' => $request->CasualLeaveDue,
                    'CalculatingAnnualLeaveMethodID' => $request->CalculatingAnnualLeaveMethodID,
                    'CalculatingCasualLeaveMethodID' => $request->CalculatingCasualLeaveMethodID,
                    'LastAccountVacation' => $request->LastAccountVacation,
                    'AnnualLeaveBalance' => $request->AnnualLeaveBalance,
                    'BalanceOfCasualLeave' => $request->BalanceOfCasualLeave,
                    'MaximumNumberOfLeave' => $request->MaximumNumberOfLeave,
                    'ContractType' => $request->ContractType,
                    'WorkType' => $request->WorkType,
                    'ServiceLeaveEntitlements' => $request->ServiceLeaveEntitlements,
                    'BeginingOfDecade' => $request->BeginingOfDecade,
                    'EndOfDecade' => $request->EndOfDecade,
                    'StartingDate' => $request->StartingDate,
                    'SocialSecurityNumber' => $request->SocialSecurityNumber,
                    'HealthInsuranceNumber' => $request->HealthInsuranceNumber,
                    'EndOfHealthInsurance' => $request->EndOfHealthInsurance,
                    'TheUnion' => $request->TheUnion,
                    'MilitaryService' => $request->MilitaryService,
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
