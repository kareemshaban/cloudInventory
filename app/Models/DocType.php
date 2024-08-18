<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    use HasFactory;
    protected $primaryKey = 'STDOCTypeID';
    protected $table = 'doctype';
    public $timestamps = false;

    protected $fillable = [
        'STDOCTypeID',
        'DOCTypeBasicID',
        'CodeEN',
        'CodeAR',
        'NameAR',
        'NameEN',
        'StockDockType',
        'StockDock',
        'IsStockDoc',
        'isAcc',
        'EntryType',
        'EntryDoc',
        'Doc',
        'User',
        'UserGroup',
        'Stock',
        'isOpenningQuantity',
        'showMultiPayment',
        'posType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
