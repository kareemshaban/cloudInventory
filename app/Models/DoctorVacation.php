<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorVacation extends Model
{
    use HasFactory;
    protected $primaryKey = 'DoctorVacationID';
    protected $table = 'doctorvacation';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DoctorVacationID',
        'FromDate',
        'ToDate',
        'Reason',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
