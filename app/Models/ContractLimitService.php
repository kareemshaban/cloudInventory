<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLimitService extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractLimitServiceID';
    protected $table = 'contractlimitservice';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ContractLimitServiceID',
        'CompanyContractID',
        'ServiceID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
