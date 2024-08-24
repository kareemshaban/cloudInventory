<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgerySalesBillServicesDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DetailsId';
    protected $table = 'surgerysalesbillservicesdetails';
    public $timestamps = false;
    protected $fillable = [
        'DetailsId',
        'ServiceID',
        'PatientSurgeryId',
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
