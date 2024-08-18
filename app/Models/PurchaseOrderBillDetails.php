<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseOrderBillDetailsId';
    protected $table = 'purchaseorderbilldetails';
    public $timestamps = false;
    protected $fillable = [
        'PurchaseOrderBillDetailsId',
        'ItemId',
        'PurchaseOrderBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'PurchaseOrderBilliItmTotalRow',
        'PurchaseOrderBilliItmNots',
        'ItemType',
        'addedValue',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
