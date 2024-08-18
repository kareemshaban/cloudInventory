<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesType extends Model
{
    use HasFactory;

    protected $primaryKey = 'ExpensesTypeID';
    protected $table = 'expensestype';
    public $timestamps = false;
    protected $fillable = [
        'ExchangeTypeID',
        'ExpensesTypeName_Ar',
        'ExpensesTypeName_En',
        'ExpensesTypeCode_Ar',
        'ExpensesTypeCode_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
