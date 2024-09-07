<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppoinementClinical extends Model
{
    use HasFactory;
    protected $primaryKey = 'AppointmentID';
    protected $table = 'appoinementclinical';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'AppointmentID',
        'ClinicID',
        'DoctorID',
        'PatientID',
        'Date',
        'ReservationDate',
        'ReservationTime',
        'AppointmentDate',
        'AppointmentTime',
        'PhoneNumber',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
