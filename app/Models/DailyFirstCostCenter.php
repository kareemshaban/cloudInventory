<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyFirstCostCenter extends Model
{
    use HasFactory;

    protected $primaryKey = 'DailyFirstCostCenterID';
    protected $table = 'dailyfirstcostcenter';
    public $timestamps = false;

    protected $fillable = [
        'DailyFirstCostCenterID',
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
