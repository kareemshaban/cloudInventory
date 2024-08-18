<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDiscountService extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractDiscountServiceID';
    protected $table = 'contractdiscountservice';
    public $timestamps = false;

    protected $fillable = [
        'ContractDiscountServiceID',
        'CompanyContractID',
        'ServiceID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
