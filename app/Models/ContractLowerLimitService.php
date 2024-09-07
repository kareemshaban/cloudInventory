<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractLowerLimitService extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractLowerLimitServiceID';
    protected $table = 'contractlowerlimitservice';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ContractLowerLimitServiceID',
        'CompanyContractID',
        'ServiceID',
        'LimitTypeID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
