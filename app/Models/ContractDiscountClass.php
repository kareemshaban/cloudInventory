<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDiscountClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContractDiscountClassID';
    protected $table = 'contractdiscountclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractDiscountClassID',
        'CompanyContractID',
        'PatientClassID',
        'Discount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
