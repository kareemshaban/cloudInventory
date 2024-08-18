<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDiscountServiceClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractDiscountServiceClassID';
    protected $table = 'contractdiscountserviceclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractDiscountServiceClassID',
        'PatientClassID',
        'CompanyContractID',
        'ServiceID',
        'Discount',
        'isCategory',
        'FileIcon',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
