<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesBillDetailsId';
    protected $table = 'salesbilldetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
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
        'stone',
        'serviceAmount',
        'QR',
        'weight',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
