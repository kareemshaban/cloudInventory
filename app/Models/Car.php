<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $primaryKey = 'CarID';
    protected $table = 'car';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CarID',
        'CarCode',
        'VendorID',
        'Brand',
        'Group',
        'Motor',
        'Model',
        'Chase',
        'ProductionYear',
        'CC',
        'CarPlateNo',
        'CarColor',
        'CarSelender',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
