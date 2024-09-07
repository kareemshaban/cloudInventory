<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReturnBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseReturnBillDetailsId';
    protected $table = 'purchasereturnbilldetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PurchaseReturnBillDetailsId',
        'ItemId',
        'PurchaseReturnBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'PurchaseReturnBilliItmTotalRow',
        'PurchaseReturnBilliExpDate',
        'PurchaseReturnBilliItmNots',
        'DeliveryNO',
        'ItemType',
        'addedValue',
        'SN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
