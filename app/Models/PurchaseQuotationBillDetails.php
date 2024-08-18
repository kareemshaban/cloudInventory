<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseQuotationBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseQuotationBillDetailsId';
    protected $table = 'purchasequotationbilldetails';
    public $timestamps = false;
    protected $fillable = [
        'PurchaseQuotationBillDetailsId',
        'ItemId',
        'PurchaseQuotationBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'PurchaseQuotationBilliItmTotalRow',
        'PurchaseQuotationBilliItmNots',
        'ItemType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
