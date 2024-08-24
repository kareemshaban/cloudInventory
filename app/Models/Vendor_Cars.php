<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor_Cars extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorID';
    protected $table = 'vendor_cars';
    public $timestamps = false;
    protected $fillable = [
        'VendorID ',
        'Name',
        'NameEn',
        'Addresse',
        'Phone',
        'Brand',
        'Model',
        'ProductionYear',
        'PlateNo',
        'Motor',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
