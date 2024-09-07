<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrescriptionID ';
    protected $table = 'prescription';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PrescriptionID ',
        'VendorID',
        'RegisterationID',
        'PrescriptionDate',
        'PatientComplement',
        'Examination',
        'BloodPressure',
        'Pulse',
        'Temparture',
        'BR',
        'Sugar',
        'Weight',
        'Height',
        'BMI',
        'PrescriptionNO',
        'PrescriptionTime',
        'PatientID',
        'DoctorID',
        'Notes',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
