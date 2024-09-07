<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StTransactionStockInDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'sttransactionstockindetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
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
        'SN',
        'SalesPrice',
        'weight',
        'fosos',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
