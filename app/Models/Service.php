<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primaryKey = 'ServiceID';
    protected $table = 'service';
    public $timestamps = false;
    protected $fillable = [
        'ServiceID',
        'ServiceNameAr',
        'ServiceNameEN',
        'ServiceNo',
        'FirstCatogryID',
        'SecondCatogryID',
        'ThirdCatogryID',
        'ClinicID',
        'VendorID',
        'Price',
        'Discount',
        'CostTypeID',
        'addedValue',
        'DoctorID',
        'InternationalCode',
        'InstrumentId',
        'RoomTypeId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
