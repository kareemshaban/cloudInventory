<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractNotcoveredServiceClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractNotCoveredServiceClassID';
    protected $table = 'contractnotcoveredservicesclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractNotCoveredServiceID',
        'PatientClassID',
        'CompanyContractID',
        'ServiceID',
        'IsCategory',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
