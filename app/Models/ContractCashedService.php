<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractCashedService extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractCashedServiceID';
    protected $table = 'contractcashedservice';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ContractCashedServiceID',
        'CompanyContractID',
        'ServiceID',
        'Price',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
