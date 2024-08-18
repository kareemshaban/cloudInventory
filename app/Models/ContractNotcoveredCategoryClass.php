<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractNotcoveredCategoryClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractNotCoveredCategoryClassID';
    protected $table = 'contractnotcoveredcategoryclass';
    public $timestamps = false;

    protected $fillable = [
        'ContractNotCoveredCategoryClassID',
        'PatientClassID',
        'CompanyContractID',
        'CategoryId',
        'Discount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
