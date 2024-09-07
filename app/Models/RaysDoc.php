<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaysDoc extends Model
{
    use HasFactory;
    protected $primaryKey = 'RaysDocID';
    protected $table = 'raysdoc';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RaysDocID',
        'RaysDocDate',
        'RaysDocTime',
        'RaysDocNo',
        'ServiceID',
        'PatientID',
        'Age',
        'SexTypeID',
        'Report',
        'BillID',
        'DoctorID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
