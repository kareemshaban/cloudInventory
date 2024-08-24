<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgerySalesBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DetailsId';
    protected $table = 'surgerysalesbilldetails';
    public $timestamps = false;
    protected $fillable = [
        'DetailsId',
        'ItemId',
        'PatientSurgeryId',
        'StoreId',
        'ItemUnit',
        'ItemQuantity',
        'ItemPrice',
        'ItemPercentageDiscount',
        'ItemDiscount',
        'ItemTotalRow',
        'ExpDate',
        'ItemNots',
        'DeliveryNO',
        'ItemType',
        'addedValue',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
