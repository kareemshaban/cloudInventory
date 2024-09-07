<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'PurchaseBillId';
    protected $table = 'purchasebill';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PurchaseBillId',
        'DocType',
        'PurchaseBillNo',
        'PurchaseBillVendorId',
        'StorId',
        'PurchaseBillWritingDate',
        'PurchaseBillPayDate',
        'PurchaseBillNots',
        'CurrencyID',
        'PurchaseBillBesadOn',
        'PurchaseBillBesadOnNO',
        'PurchaseBillBesadOnDOcID',
        'PurchaseBillTotal',
        'PurchaseBillPayed',
        'PurchaseBillDiscount',
        'PurchaseBillCredit',
        'PurchaseBillNet',
        'Approved',
        'Returned',
        'TotalAddedValue',
        'vendorInvoiceNo',
        'delivery_doc_no',
        'serviceTotal',
        'serviceDiscount',
        'serviceVat',
        'serviceNet',
        'nodeKey',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
