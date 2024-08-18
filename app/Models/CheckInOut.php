<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInOut extends Model
{
    use HasFactory;

    protected $primaryKey = 'CheckInOutID';
    protected $table = 'checkinout';
    public $timestamps = false;

    protected $fillable = [
        'CheckInOutID',
        'CheckInNumber',
        'PatientId',
        'RelativeName',
        'RelativeRelation',
        'RelativeAddress',
        'RelativePhone',
        'TransormFrom',
        'Accident',
        'IsPolice',
        'PoliceName',
        'DoctorId',
        'DepartmentId',
        'RoomId',
        'Withattacement',
        'InitialCondition',
        'EnterDate',
        'EnterTime',
        'ExitDate',
        'StayPeriod',
        'FinalCondition',
        'SideConditions',
        'Examination',
        'Operations',
        'MedicamentInHospital',
        'MedicamentAfterHospital',
        'ICDCODE',
        ' ExitCondion',
        'ExitDestination',
        'MedicalRecommindation',
        'IsIllnessVacation',
        'enterApproval',
        'enterWrittenBy',
        'nurseName',
        'departmentDoctor',
        'hospitalDirector',
        'departmentDirector',
        'AutoSpy',
        'vacationDuration',
        'IsCheckedInBefore',
        'enterType',
        'ClassId',
        'Approve',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
