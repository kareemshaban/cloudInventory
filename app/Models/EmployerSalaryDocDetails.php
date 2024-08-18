<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSalaryDocDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployerSalaryDocDetailsID';
    protected $table = 'employersalarydocdetails';
    public $timestamps = false;
    protected $fillable = [
        'EmployerSalaryDocDetailsID',
        'EmployerSalaryDocID',
        'SalaryTermsID',
        'Additional',
        'Deduction',
        'Number',
        'UnitID',
        'AccountCreditID',
        'AccountDepitID',
        'CostCenterCreditID',
        'CostCenterDepitID',
        'OtherValue',
        'SalaryTermsCode',
        'SalaryTermsName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
