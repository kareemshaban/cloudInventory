<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBillPosPostPoned extends Model
{
    use HasFactory;

    protected $primaryKey = 'SalesBillId';
    protected $table = 'salesbillpospostponed';
    public $timestamps = false;
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
        'reponsibleId',
        'delegatorId',
        'serviceTotal',
        'serviceDiscount',
        'serviceVat',
        'serviceNet',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
