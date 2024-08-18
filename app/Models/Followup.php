<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    use HasFactory;

    protected $primaryKey = 'FollowUpID';
    protected $table = 'followup';
    public $timestamps = false;
    protected $fillable = [
        'FollowUpID',
        'PatientID',
        'AppointmentID',
        'FollowUpTypeID',
        'BasedONID',
        'ClinicID',
        'DoctorID',
        'FollowUpDate',
        'Nots',
        'Payed',
        'Credit',
        'Net',
        'CostTypeID',
        'FollowUpCode',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
