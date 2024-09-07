<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'PatientID';
    protected $table = 'patient';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PatientID',
        'PatientCode',
        'PatientType',
        'PatientClass',
        'Name',
        'FatherName',
        'GrandFatherName',
        'NameEn',
        'FatherNameEn',
        'GrandFatherNameEn',
        'SexType',
        'BirthDay',
        'AgeDay',
        'AgeMonth',
        'AgeYear',
        'SocialStatus',
        'NationalityID',
        'ReligionID',
        'Education',
        'job',
        'WorkHours',
        'Weekend',
        'Addresse',
        'NationalNo',
        'PostalCode',
        'Phone',
        'PhoneTwo',
        'PhoneRelatives',
        'mobile',
        'Fax',
        'Email',
        'Amount',
        'City',
        'Governorate',
        'Town',
        'Area',
        'street',
        'house',
        'homeNo',
        'InsuranceCompany',
        'DebtLimit',
        'Discount',
        'InsuranceNO',
        'InsuranceCardNO',
        'Nots',
        'Weight',
        'Lenght',
        'BloodType',
        'Account',
        'openningBalance',
        'currentBalance',
        'RegisterationDate',
        'NextSeen',
        'Workplace',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];


}
