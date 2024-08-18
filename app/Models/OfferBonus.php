<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferBonus extends Model
{
    use HasFactory;

    protected $primaryKey = 'OfferBonusID';
    protected $table = 'offerbonus';
    public $timestamps = false;
    protected $fillable = [
        'OfferBonusID',
        'OfferID',
        'ItemID',
        'MeasureUnitID',
        'Quantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
