<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractNotcoveredService extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractNotCoveredServiceID';
    protected $table = 'contractnotcoveredservice';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ContractNotCoveredServiceID',
        'CompanyContractID',
        'ServiceID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
