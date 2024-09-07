<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyContract extends Model
{
    use HasFactory;
    protected $primaryKey = 'CompanyContractID';
    protected $table = 'companycontract';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CompanyContractID',
        'CompanyCocentractCode',
        'CompanyID',
        'ContractBeginDate',
        'ContractEndDate',
        'Active',
        'EndContract',
        'EndContractDate',
        'WithDiscount',
        'DiscountType',
        'WithLimit',
        'LimitType',
        'WithLowLimit',
        'LowLimitType',
        'PatientLoadType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
