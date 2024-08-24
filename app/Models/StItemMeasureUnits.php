<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemMeasureUnits extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'stitemmeasureunits';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'ItemID',
        'MeasureUnitID',
        'UnitLevel',
        'TransferFactor',
        'IsAutomaticPricing',
        'BarCode',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
