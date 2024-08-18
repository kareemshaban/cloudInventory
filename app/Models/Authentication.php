<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authentication extends Model
{
    use HasFactory;
    protected $primaryKey = 'AuthenticationID';
    protected $table = 'authentication';
    public $timestamps = false;
    protected $fillable = [
        'AuthenticationID',
        'LoginID',
        'SellingUnderCost',
        'SellingWithoutBalance',
        'CostPrice',
        'PrintingTimesNO',
        'EditPrintdDocs',
        'EditDate',
        'MaxDiscPercentge',
        'SellingBetweenPrices',
        'MaxUnitDiscount',
        'sellerId',
        'printBarcode',
        'enablePOS',
        'enableBranch',
        'enableEndShift',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
