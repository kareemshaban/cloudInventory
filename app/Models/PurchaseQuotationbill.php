<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseQuotationbill extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseQuotationBillId';
    protected $table = 'purchasequotationbill';
    public $timestamps = false;
    protected $fillable = [
        'PurchaseQuotationBillId',
        'DocType',
        'PurchaseQuotationBillNo',
        'DocID',
        'PurchaseQuotationBillVendorId',
        'StorId',
        'PurchaseQuotationBillWritingDate',
        'PurchaseQuotationBillNots',
        'PurchaseQuotationBillAnalysesCode',
        'PurchaseQuotationBillTotal',
        'PurchaseQuotationBillDiscount',
        'PurchaseQuotationBillNet',
        'Approved',
        'CurrencyID',
        'Returned',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
