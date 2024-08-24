<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryAppointment extends Model
{
    use HasFactory;

    protected $primaryKey = 'SurgeryAppointementID';
    protected $table = 'surgeryappointement';
    public $timestamps = false;
    protected $fillable = [
        'SurgeryAppointementID',
        'SurgeryAppointementCode',
        'PatientID',
        'SurgeryID',
        'RoomPrice',
        'SurgeryDate',
        'SurgeryTime',
        'SurgeryPeriod',
        'SurveyPeriodTypeID',
        'RoomId',
        'CheckInOutID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
