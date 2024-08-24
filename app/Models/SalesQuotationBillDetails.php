<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesQuotationBillDetails extends Model
{
    use HasFactory;

    protected $primaryKey = 'SalesQuotationBillDetailsId';
    protected $table = 'salesquotationbilldetails';
    public $timestamps = false;
    protected $fillable = [
        'SalesQuotationBillDetailsId',
        'ItemId',
        'SalesQuotationBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'SalesQuotationBilliItmTotalRow',
        'SalesQuotationBilliItmNots',
        'ItemType',
        'patch',
        'exp',
        'addedValue',
        'ItemPriceWithAdded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
