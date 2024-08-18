<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyIntialFirstCostCenter extends Model
{
    use HasFactory;

    protected $primaryKey = 'DailyIntialFirstCostCenterID';
    protected $table = 'dailyintialfirstcostcenter';
    public $timestamps = false;

    protected $fillable = [
        'DailyIntialFirstCostCenterID',
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
