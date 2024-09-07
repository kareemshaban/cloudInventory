<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtClinic extends Model
{
    use HasFactory;

    protected $primaryKey = 'ClinicID';
    protected $table = 'ltclinic';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ClinicID',
        'ClinicCode_Ar',
        'ClinicCode_En',
        'ClinicName_Ar',
        'ClinicName_En',
        'DefaultDoctor',
        'PeriodDateAM',
        'PeriodDatePM',
        'ExaminationTime',
        'DocTypeId',
        'Doc',
        'ItemNO',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
