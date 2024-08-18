<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtStock extends Model
{
    use HasFactory;

    protected $primaryKey = 'StockID';
    protected $table = 'ltstock';
    public $timestamps = false;
    protected $fillable = [
        'StockID',
        'StockCode_Ar',
        'StockCode_En',
        'StockName_Ar',
        'StockName_En',
        'StockName_Ar_abs',
        'StockName_En_abs',
        'IsfrmInventoryAdjustment',
        'StockMaxCost',
        'StockMaxPrice',
        'GLN',
        'hamachi_db',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
