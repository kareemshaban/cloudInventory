<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balancebarcode extends Model
{
    use HasFactory;
    protected $primaryKey = 'BalanceBarcodeID';
    protected $table = 'balancebarcode';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'BalanceBarcodeID',
        'BarcodeDigitNo',
        'BarcodeFirstDigit',
        'QuantityFactor',
        'price',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
