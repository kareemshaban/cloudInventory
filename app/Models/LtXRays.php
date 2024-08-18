<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtXRays extends Model
{
    use HasFactory;
    protected $primaryKey = 'X_RaysID';
    protected $table = 'ltx_rays';
    public $timestamps = false;
    protected $fillable = [
        'X_RaysID',
        'X_RaysCode_Ar',
        'X_RaysCode_En',
        'X_RaysName_Ar',
        'X_RaysName_En',
        'DoctorID',
        'Details',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
