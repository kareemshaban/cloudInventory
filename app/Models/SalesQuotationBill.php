<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesQuotationBill extends Model
{
    use HasFactory;

    protected $primaryKey = 'SalesQuotationBillId';
    protected $table = 'salesquotationbill';
    public $timestamps = false;
    protected $fillable = [
        'SalesQuotationBillId',
        'DocType',
        'SalesQuotationBillNo',
        'DocID',
        'SalesQuotationBillVendorId',
        'StorId',
        'SalesQuotationBillWritingDate',
        'SalesQuotationBillNots',
        'SalesQuotationBillTotal',
        'SalesQuotationBillPayed',
        'SalesQuotationBillDiscount',
        'SalesQuotationBillCredit',
        'SalesQuotationBillNet',
        'Approved',
        'CurrencyID',
        'Returned',
        'vendor_name',
        'nodeKey',
        'address',
        'phone_no',
        'registration_no',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
