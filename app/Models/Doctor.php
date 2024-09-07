<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $primaryKey = 'DoctorID';
    protected $table = 'doctor';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DoctorID',
        'Name',
        'NameEn',
        'Religion',
        'SexType',
        'BirthDay',
        'SocialStatus',
        'NationalityID',
        'Education',
        'ClinicID',
        'Details',
        'Phone',
        'PhoneTwo',
        'RegistrationStartDate',
        'RegistrationEndDate',
        'RegisterationNO',
        'DepartementID',
        'Specification',
        'TimePeriod',
        'CommissionTypeID',
        'CommissionFromTypeID',
        'DoctorCode',
        'CashCommissionType',
        'DebitCommissionType',
        'CompanyCommissionType',
        'isPaiedOnly',
        'AccountanceNoId',
        'CostCenterId',
        'DiscountAccountId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
