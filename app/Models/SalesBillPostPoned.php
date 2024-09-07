<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBillPostPoned extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesBillId';
    protected $table = 'salesbillpospostponed';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalesBillId',
        'DocType',
        'SalesBillNo',
        'DocID',
        'SalesBillVendorId',
        'StorId',
        'SalesBillWritingDate',
        'SalesBillBillPayDate',
        'SalesBillNots',
        'CurrencyID',
        'SalesBillBesadOn',
        'SalesBillBesadOnId',
        'SalesBillBesadOnDocID',
        'SalesBillTotal',
        'SalesBillPayed',
        'SalesBillDiscount',
        'SalesBillCredit',
        'SalesBillNet',
        'Approved',
        'returned',
        'CarID',
        'TotalAddedValue',
        'SellerCode',
        'nodeKey',
        'registrationNo',
        'vendorName',
        'vendorBeforeBalance',
        'vendorAfterBalance',
        'phoneNo',
        'address',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
