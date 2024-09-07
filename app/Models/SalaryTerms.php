<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryTerms extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryTermsID';
    protected $table = 'salaryterms';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalaryTermsID',
        'Code',
        'NameAR',
        'NameEN',
        'UsedID',
        'AppliedFor',
        'ValueMethodID',
        'Value',
        'Scenario',
        'BasicComponentCode',
        'Multiply',
        'division',
        'Approximation',
        'Maximum',
        'Minimum',
        'NoAndUnit',
        'OperatingElement',
        'NumberUnit',
        'DefaultLimit',
        'DepitAccountTypeID',
        'DepitAccountId',
        'CreditAccountTypeID',
        'CreditAccountId',
        'DepitCostCenterTypeID',
        'DepitCostCenterID',
        'CreditCostCenterTypeID',
        'CreditCostCenterID',
        'NotEqualZero',
        'CanDelete',
        'AutoMake',
        'CanEdit',
        'CanDistributeValue',
        'LeaveWorkContainer',
        'TaxGuid',
        'InsuranceGuid',
        'Type',
        'SalaryTermsCode',
        'SalaryTermsNameAR',
        'SalaryTermsNameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
