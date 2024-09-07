<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestSalesBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalesBillId';
    protected $table = 'restsalesbill';
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
        'SalesBillDiscountType',
        'SalesBillCredit',
        'SalesBillNet',
        'Approved',
        'returned',
        'BillType',
        'TableNo',
        'Driver',
        'DeliveryFees',
        'ShiftNo',
        'Credit',
        'Cash',
        'Atm',
        'TotalAddedValue',
        'HallID',
        'TableID',
        'BonNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
