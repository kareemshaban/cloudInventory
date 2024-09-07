<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtAnalysis extends Model
{
    use HasFactory;

    protected $primaryKey = 'AnalysisID';
    protected $table = 'ltanalysis';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'AnalysisID',
        'AnalysisCode_Ar',
        'AnalysisCode_En',
        'AnalysisName_Ar',
        'AnalysisName_En',
        'DoctorID',
        'Details',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
