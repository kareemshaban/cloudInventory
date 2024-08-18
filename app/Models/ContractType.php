<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    use HasFactory;
    protected $primaryKey = 'ContractTypeID';
    protected $table = 'contracttype';
    public $timestamps = false;

    protected $fillable = [
        'ContractTypeID',
        'ContractTypeAr',
        'ContractTypeEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
