<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointement extends Model
{
    use HasFactory;
    protected $primaryKey = 'AppointementID';
    protected $table = 'appointement';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'AppointementID',
        'ClinicID',
        'DoctorID',
        'AppointementNO',
        'PatientID',
        'AppointementDate',
        'RegisterationDate',
        'PatientMobile',
        'Approved',
        'ApponitmentIsEnd',
        'IsAlerted',
        'ServiceId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
