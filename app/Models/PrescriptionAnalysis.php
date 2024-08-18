<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionAnalysis extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrescriptionAnalysisID';
    protected $table = 'prescriptionanalysis';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionAnalysisID',
        'AnalysisID',
        'PrescriptionID',
        'Notes',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
