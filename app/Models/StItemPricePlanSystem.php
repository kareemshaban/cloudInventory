<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemPricePlanSystem extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'stitempriceplansystems';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ID',
        'ItemID',
        'MeasureUnitID',
        'PriceValue',
        'ToPriceValue',
        'PriceLevel',
        'PriceSystemTypeID',
        'DiscountPercentage',
        'PriceValueWithAdded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
