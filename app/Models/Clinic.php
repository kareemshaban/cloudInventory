<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $primaryKey = 'ClinicID';
    protected $table = 'clinic';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ClinicID',
        'ClinicName_Ar',
        'ClinicName_En',
        'FloorNo',
        'RoomNo',
        'Telephone',
        'Details',
        'Active',
        'ClinicNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
