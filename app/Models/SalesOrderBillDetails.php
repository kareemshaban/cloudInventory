<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderBillDetails extends Model
{
    use HasFactory;

    protected $primaryKey = 'SalesOrderBillDetailsId';
    protected $table = 'salesorderbilldetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalesOrderBillDetailsId',
        'ItemId',
        'SalesOrderBillId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'SalesOrderBilliItmTotalRow',
        'SalesOrderBilliItmNots',
        'DeliveryNO',
        'ItemType',
        'patch',
        'exp',
        'ItemPriceWithAdded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
