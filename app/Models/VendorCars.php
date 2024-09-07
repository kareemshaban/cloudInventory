<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorCars extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorID';
    protected $table = 'vendorcars';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'VendorID',
        'VendorType',
        'Name',
        'NameEn',
        'Addresse',
        'Phone',
        'City',
        'Governorate',
        'Town',
        'Area',
        'street',
        'house',
        'homeNo',
        'Model',
        'Property',
        'PlateNo',
        'Color',
        'Size',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
