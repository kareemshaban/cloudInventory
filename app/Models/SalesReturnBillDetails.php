<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturnBillDetails extends Model
{
    use HasFactory;

    protected $primaryKey = 'SalesReturnBillDetailsId';
    protected $table = 'salesreturnbilldetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalesReturnBillDetailsId',
        'ItemId',
        'SalesReturnBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'IItemTotalRow',
        'ExpDate',
        'ItetmNots',
        'DeliveryNO',
        'ItemType',
        'addedValue',
        'cost',
        'ItemPriceWithAdded',
        'stone',
        'QR',
        'weight',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
