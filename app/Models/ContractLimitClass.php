<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLimitClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractLimitClassID';
    protected $table = 'contractlimitclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractLimitClassID',
        'PatientClassID',
        'CompanyContractID',
        'LimitDay',
        'LimitWeek',
        'LimitMonth',
        'LimitYear',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
