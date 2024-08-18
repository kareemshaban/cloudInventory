<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySecondCostCenter extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailySecondCostCenterID';
    protected $table = 'dailysecondcostcenter';
    public $timestamps = false;

    protected $fillable = [
        'DailySecondCostCenterID',
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
