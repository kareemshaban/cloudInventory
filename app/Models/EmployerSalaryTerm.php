<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSalaryTerm extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployerSalaryTermID';
    protected $table = 'employersalaryterm';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'EmployerSalaryTermID',
        'EmployerID',
        'SalaryTermsID',
        'Amount',
        'DepitAccountID',
        'CreditAccountID',
        'DepitCostCenterID',
        'CreditCostCenterID',
        'Code',
        'AccountType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
