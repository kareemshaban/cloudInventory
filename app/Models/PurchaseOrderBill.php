<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseOrderBillId';
    protected $table = 'purchaseorderbill';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PurchaseOrderBillId',
        'DocType',
        'PurchaseOrderBillNo',
        'DocID',
        'PurchaseOrderBillVendorId',
        'StorId',
        'PurchaseOrderBillWritingDate',
        'PurchaseOrderBillNots',
        'PurchaseBillBesadOn',
        'PurchaseBillBesadOnNO',
        'PurchaseBillBesadOnDOcID',
        'PurchaseOrderBillTotal',
        'PurchaseOrderBillDiscount',
        'PurchaseOrderBillNet',
        'Approved',
        'CurrencyID',
        'returned',
        'addedValue',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
