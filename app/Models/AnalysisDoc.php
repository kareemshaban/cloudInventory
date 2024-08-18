<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisDoc extends Model
{
    use HasFactory;
    protected $primaryKey = 'AnalysisDocID';
    protected $table = 'analysisdoc';
    public $timestamps = false;

    protected $fillable = [
        'AnalysisDocID',
        'AnalysisDocDate',
        'AnalysisDocTime',
        'AnalysisDocNo',
        'ServiceID',
        'PatientID',
        'Age',
        'SexTypeID',
        'Report',
        'BillId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];

}
