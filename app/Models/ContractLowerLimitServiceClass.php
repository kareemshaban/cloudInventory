<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLowerLimitServiceClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractLowerLimitServicesClassID';
    protected $table = 'contractlowerlimitservicesclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractLowerLimitServicesClassID',
        'PatientClassID',
        'CompanyContractID',
        'LowerLimit',
        'ServiceID',
        'LimitTypeID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
