<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtDiagnosis extends Model
{
    use HasFactory;
    protected $primaryKey = 'DiagnosisID';
    protected $table = 'ltdiagnosis';
    public $timestamps = false;
    protected $fillable = [
        'DiagnosisID',
        'DiagnosisName_Ar',
        'DoctorID',
        'Details',
        'DiagnosisCode',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
