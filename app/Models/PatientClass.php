<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'PatientClassID';
    protected $table = 'patientclass';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PatientClassID',
        'PatientClassAR',
        'PatientClassEN',
        'PatientClassCodeAR',
        'PatientClassCodeEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
