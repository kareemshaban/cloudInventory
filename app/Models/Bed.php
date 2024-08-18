<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    protected $primaryKey = 'BedID';
    protected $table = 'bed';
    public $timestamps = false;

    protected $fillable = [
        'BedID',
        'Code',
        'HouseingType',
        'BedTypeID',
        'BedNo',
        'Price',
        'IsAvailable',
        'BedInsurance',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
