<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningQuantitiesDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'OpenningQuantitiesDetailsId';
    protected $table = 'openningquantitiesdetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'OpenningQuantitiesDetailsId',
        'ItemId',
        'OpenningQuantitiesId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'OpenningQuantitiesiItmTotalRow',
        'OpenningQuantitiesiExpDate',
        'OpenningQuantitiesiItmNots',
        'DeliveryNO',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
