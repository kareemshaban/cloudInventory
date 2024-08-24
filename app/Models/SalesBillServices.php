<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesBillServices extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id';
    protected $table = 'salesbillservices';
    public $timestamps = false;
    protected $fillable = [
        'Id',
        'DocType',
        'BillNo',
        'Fixed',
        'VendorId',
        'WritingDate',
        'VisitNoID',
        'Nots',
        'DoctorID',
        'transformedFromID',
        'ClassificationID',
        'Total',
        'Payed',
        'Discount',
        'Credit',
        'Net',
        'Approved',
        'Cash',
        'Casheir',
        'PutBack',
        'CollectingNo',
        'VendorCost',
        'CompanyCost',
        'addedValue',
        'BillType',
        'isPaied',
        'checkInId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
