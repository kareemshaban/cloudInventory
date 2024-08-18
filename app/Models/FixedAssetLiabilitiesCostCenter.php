<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAssetLiabilitiesCostCenter extends Model
{
    use HasFactory;

    protected $primaryKey = 'FixedAssetLiabilitiesCostCenterID';
    protected $table = 'fixedassetliabilitiescostcenter';
    public $timestamps = false;
    protected $fillable = [
        'FixedAssetLiabilitiesCostCenterID',
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
