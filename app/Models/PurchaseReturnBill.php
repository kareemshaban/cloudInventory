<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReturnBill extends Model
{
    use HasFactory;

    protected $primaryKey = 'PurchaseReturnBillId';
    protected $table = 'purchasereturnbill';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PurchaseReturnBillId',
        'DocType',
        'PurchaseReturnBillNo',
        'DocID',
        'PurchaseReturnBillVendorId',
        'StorId',
        'PurchaseReturnBillWritingDate',
        'PurchaseReturnBillNots',
        'PurchaseBillBesadOn',
        'PurchaseBillBesadOnNO',
        'PurchaseBillBesadOnDOcID',
        'PurchaseReturnBillPayed',
        'PurchaseReturnBillDiscount',
        'PurchaseReturnBillCredit',
        'PurchaseReturnBillNet',
        'Approved',
        'CurrencyID',
        'returned',
        'TotalAddedValue',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
