<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtMeasureUnit extends Model
{
    use HasFactory;

    protected $primaryKey = 'MeasureUnitID';
    protected $table = 'ltmeasureunit';
    public $timestamps = false;
    protected $fillable = [
        'MeasureUnitID',
        'MeasureUnitCode_Ar',
        'MeasureUnitCode_En',
        'MeasureUnitName_Ar',
        'MeasureUnitName_En',
        'DoctorID',
        'Details',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
