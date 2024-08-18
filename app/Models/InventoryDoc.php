<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryDoc extends Model
{
    use HasFactory;
    protected $primaryKey = 'InventoryDocID';
    protected $table = 'inventorydoc';
    public $timestamps = false;
    protected $fillable = [
        'InventoryDocID',
        'StockID',
        'FileName',
        'Operation ',
        'QuantityType',
        'EntryDate',
        'FieldsSeparator',
        'Repeater',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
