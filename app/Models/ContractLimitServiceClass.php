<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLimitServiceClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractLimitServiceClassID';
    protected $table = 'contractlimitserviceclass';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ContractLimitServiceClassID',
        'PatientClassID',
        'CompanyContractID',
        'ServiceID',
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
