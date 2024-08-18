<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionDiagnosis extends Model
{
    use HasFactory;

    protected $primaryKey = 'PrescriptionDiagnosisID';
    protected $table = 'prescriptiondiagnosis';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionDiagnosisID',
        'PrescriptionID',
        'Notes',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
