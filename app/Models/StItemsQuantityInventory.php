<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemsQuantityInventory extends Model
{
    use HasFactory;
    protected $primaryKey = 'STItemsQuantityInventoryID';
    protected $table = 'stitemsquantityinventory';
    public $timestamps = false;
    protected $fillable = [
        'STItemsQuantityInventoryID',
        'ItemID',
        'Unit',
        'MaximumQuantity',
        'MinimumQuantity',
        'SiteCode',
        'Inventory',
        'Stock',
        'inventoryClinic',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
