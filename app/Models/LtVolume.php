<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtVolume extends Model
{
    use HasFactory;

    protected $primaryKey = 'VolumeID';
    protected $table = 'ltvolume';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'VolumeID',
        'VolumeCode_Ar',
        'VolumeCode_En',
        'VolumeName_Ar',
        'VolumeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
