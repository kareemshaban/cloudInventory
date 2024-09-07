<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturnBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesReturnBillId';
    protected $table = 'salesreturnbill';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalesReturnBillId',
        'DocType',
        'SalesReturnBillNo',
        'DocID',
        'SalesReturnBillVendorId',
        'StorId',
        'SalesReturnBillWritingDate',
        'SalesReturnBillNots',
        'SalesReturnBillBesadOn',
        'SalesReturnBillBesadOnNO',
        'SalesReturnBillBesadOnDcoID',
        'SalesReturnBillTotal',
        'SalesReturnBillPayed',
        'SalesReturnBillDiscount',
        'SalesReturnBillCredit',
        'SalesReturnBillNet',
        'Approved',
        'CurrencyID',
        'returned',
        'TotalAddedValue',
        'sellerId',
        'nodeKey',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
