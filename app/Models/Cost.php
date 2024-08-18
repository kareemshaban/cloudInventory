<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $primaryKey = 'CostID';
    protected $table = 'cost';
    public $timestamps = false;

    protected $fillable = [
        'CostID',
        'ItemID',
        'MeasureUnitID',
        'LastCost',
        'PreviousCost',
        'AverageCost',
        'StandardCost',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
