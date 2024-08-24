<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StTransactionStockOutDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'sttransactionstockoutdetails';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'TransactionID',
        'ItemID',
        'MeasureUnitID',
        'AmountValue',
        'PriceValue',
        'Quantity',
        'Notes',
        'Code',
        'ExpiryDate',
        'StockId',
        'ItemType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
