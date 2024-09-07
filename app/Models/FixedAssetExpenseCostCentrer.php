<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAssetExpenseCostCentrer extends Model
{
    use HasFactory;

    protected $primaryKey = 'FixedAssetExpensesCostCenterID';
    protected $table = 'fixedassetexpensescostcenter';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'FixedAssetExpensesCostCenterID',
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
