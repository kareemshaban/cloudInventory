<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyIntialSecondCostCenter extends Model
{
    use HasFactory;

    protected $primaryKey = 'DailyIntialSecondCostCenterID';
    protected $table = 'dailyintialsecondcostcenter';
    public $timestamps = false;

    protected $fillable = [
        'DailyIntialSecondCostCenterID',
        'CostcenterID',
        'DailyEntryDetailsID',
        'Amount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
