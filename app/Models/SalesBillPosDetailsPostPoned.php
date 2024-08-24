<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBillPosDetailsPostPoned extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesBillDetailsId';
    protected $table = 'salesbillposdetailspostponed';
    public $timestamps = false;
    protected $fillable = [
        'SalesBillDetailsId',
        'ItemId',
        'SalesBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'ItemTotalRow',
        'ExpDate',
        'ItemNots',
        'DeliveryNO',
        'ItemType',
        'addedValue',
        'cost',
        'ItemPriceWithAdded',
        'QR',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
