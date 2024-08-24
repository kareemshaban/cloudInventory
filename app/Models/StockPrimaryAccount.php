<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockPrimaryAccount extends Model
{
    use HasFactory;

    protected $primaryKey = 'StockPrimaryAccountID';
    protected $table = 'stockprimaryaccount';
    public $timestamps = false;
    protected $fillable = [
        'StockPrimaryAccountID',
        'StockID',
        'PrimaryAccountID',
        'AccountID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
