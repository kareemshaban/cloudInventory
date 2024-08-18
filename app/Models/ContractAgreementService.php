<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractAgreementService extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractAgreementServiceID';
    protected $table = 'contractagreementservice';
    public $timestamps = false;

    protected $fillable = [
        'ContractAgreementServiceID',
        'CompanyContractID',
        'ServiceID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
