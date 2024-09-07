<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentConfirmation extends Model
{
    use HasFactory;
    protected $primaryKey = 'ConfirmationID';
    protected $table = 'appointmentconfirmation';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ConfirmationID',
        'ConfirmationCode',
        'AppointmentID',
        'AppointmentDate',
        'PatientID',
        'DoctorID',
        'AppointmentType',
        'Total',
        'Paid',
        'Remaining',
        'PlaceId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
