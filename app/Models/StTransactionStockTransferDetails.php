<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StTransactionStockTransferDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'sttransactionstocktransferdetails';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'TransactionID',
        'ItemID',
        'MeasureUnitID',
        'AmountValue',
        'PriceValue',
        'Quantity',
        'Patch',
        'expiryDate',
        'SN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
