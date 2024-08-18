<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientSurgery extends Model
{
    use HasFactory;
    protected $primaryKey = 'PatientSurgeryId';
    protected $table = 'patientsurgery';
    public $timestamps = false;
    protected $fillable = [
        'PatientSurgeryId',
        'Code',
        'PatientID',
        'CheckInOutID',
        'surgeryAppointmentId',
        'SurgeryID',
        'DoctorID',
        'AnesthetizationDoctorID',
        'EnterDate',
        'ExitDate',
        'salesBillServiceId',
        'salesBillId',
        'Approval',
        'FileType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
