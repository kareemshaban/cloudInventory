<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemsQuantity extends Model
{
    use HasFactory;
    protected $primaryKey = 'STItemsQuantityID';
    protected $table = 'stitemsquantity';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'STItemsQuantityID',
        'LTStockID',
        'STItemsID',
        'STItemMeasureUnitsID',
        'Quantity',
        'OldQuantity',
        'IsopenningQuantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];

}
