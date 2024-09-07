<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLowerLimitBillSumClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractLowerLimitBillSumClassID';
    protected $table = 'contractlowerlimitbillsumclass';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ContractLowerLimitBillSumClassID',
        'CompanyContractID',
        'PatientClassID',
        'LowerLimitBillSum',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
