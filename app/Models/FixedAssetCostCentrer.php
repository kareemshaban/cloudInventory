<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAssetCostCentrer extends Model
{
    use HasFactory;

    protected $primaryKey = 'FixedAssetCostCenterID';
    protected $table = 'fixedassetcostcenter';
    public $timestamps = false;
    protected $fillable = [
        'FixedAssetCostCenterID',
        'CostcenterID',
        'FixedAssetID',
        'Amount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
