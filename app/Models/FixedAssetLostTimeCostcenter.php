<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAssetLostTimeCostcenter extends Model
{
    use HasFactory;

    protected $primaryKey = 'FixedAssetLostTimeCostCenterID';
    protected $table = 'fixedassetlosttimecostcenter';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'FixedAssetLostTimeCostCenterID',
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
