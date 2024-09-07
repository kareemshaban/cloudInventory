<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesOrderBillId';
    protected $table = 'salesorderbill';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalesOrderBillId',
        'DocType',
        'SalesOrderBillNo',
        'DocID',
        'SalesOrderBillVendorId',
        'StorId',
        'delieveryTime',
        'SalesOrderBillWritingDate',
        'SalesOrderBillNots',
        'SalesOrderBillBesadOn',
        'SalesOrderBillBesadOnNO',
        'SalesOrderBillBesadOnDocID',
        'SalesOrderBillTotal',
        'SalesOrderBillPayed',
        'SalesOrderBillDiscount',
        'SalesOrderBillCredit',
        'SalesOrderBillNet',
        'Approved',
        'CurrencyID',
        'CarID',
        'returned',
        'nodeKey',
        'vendorName',
        'address',
        'phone',
        'vat_no',
        'second_note',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
