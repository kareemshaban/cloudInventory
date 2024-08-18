<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $primaryKey = 'CompanyID';
    protected $table = 'company';
    public $timestamps = false;

    protected $fillable = [
        'CompanyID',
        'CompanyCode_Ar',
        'CompanyCode_En',
        'CompanyName_Ar',
        'CompanyName_En',
        'PhoneFirst',
        'PhoneSecond',
        'Mobile',
        'FaxFirst',
        'CompanyManager',
        'City',
        'Governorate',
        'Town',
        'Area',
        'street',
        'house',
        'homeNo',
        'Addresse',
        'PostOffice',
        'PostCode',
        'CompanyTypeID',
        'InsuranceCompany',
        'InsuranceNO',
        'PaymentTypeID',
        'AccountID',
        'IndebtednessLimit',
        'PaymentPeriod',
        'OpeningBlance',
        'FinancialManager',
        'Notes',
        'AccountanceNoId',
        'CostCenterId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
