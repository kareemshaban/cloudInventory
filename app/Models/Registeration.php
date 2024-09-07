<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registeration extends Model
{
    use HasFactory;
    protected $primaryKey = 'RegisterationID';
    protected $table = 'registeration';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RegisterationID',
        'VendorID',
        'FloorID',
        'HouseNo',
        'HomeNo',
        'Amount',
        'firstInstallmentDate',
        'Details',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
