<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLowerLimitClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractLowerLimitClassID';
    protected $table = 'contractlowerlimitclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractLowerLimitClassID',
        'CompanyContractID',
        'PatientClassID',
        'LowerLimit',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
