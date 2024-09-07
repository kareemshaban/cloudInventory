<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBillServicesDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DetailsId';
    protected $table = 'salesbillservicesdetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'DetailsId',
        'ServiceID',
        'BillId',
        'ItemQuantity',
        'ItemPrice',
        'TVendor',
        'ItemDiscount',
        'ItemPercentageDiscount',
        'TotalRow',
        'addedValue',
        'CollectingOrderDetailsId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
