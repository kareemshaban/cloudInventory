<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicSettings extends Model
{
    use HasFactory;
    protected $primaryKey = 'ClinicSettingID';
    protected $table = 'clinicsetting';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ClinicSettingID',
        'IsAddingValue',
        'AddIngValue',
        'FollowUpDuration',
        'CallingRepeate',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
