<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesBillId';
    protected $table = 'salesbill';
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
        'serviceTotal',
        'serviceDiscount',
        'serviceVat',
        'serviceNet',
        'reponsibleId',
        'delegatorId',
        'uploaded',
        'second_note',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
