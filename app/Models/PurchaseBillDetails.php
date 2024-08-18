<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseBillDetailsId';
    protected $table = 'purchasebilldetails';
    public $timestamps = false;
    protected $fillable = [
        'PurchaseBillDetailsId',
        'ItemId',
        'PurchaseBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'sellingPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'PurchaseBilliItmTotalRow',
        'PurchaseBilliExpDate',
        'PurchaseBillStartDate',
        'PurchaseBilliItmNots',
        'DeliveryNO',
        'ItemType',
        'addedValue',
        'serviceAmount',
        'serialNo',
        'weight',
        'fosos',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
