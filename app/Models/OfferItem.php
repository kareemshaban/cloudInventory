<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'OfferItemID';
    protected $table = 'offeritem';
    public $timestamps = false;
    protected $fillable = [
        'OfferItemID',
        'OfferID',
        'ItemID',
        'MeasureUnitID',
        'Price',
        'Quantity',
        'Total',
        'OfferPrice',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
