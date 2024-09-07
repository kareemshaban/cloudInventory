<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSheet extends Model
{
    use HasFactory;
    protected $primaryKey = 'DoctorSheetID';
    protected $table = 'doctorsheet';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DoctorSheetID',
        'DoctorID',
        'WeekDayID',
        'StartTime',
        'EndTime',
        'isExist',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
