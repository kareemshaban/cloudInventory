<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryDocDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'inventorydocdetails';
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
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
