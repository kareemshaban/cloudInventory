<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtReligion extends Model
{
    use HasFactory;
    protected $primaryKey = 'ReligionID';
    protected $table = 'ltreligion';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ReligionID',
        'ReligionCode_Ar',
        'ReligionCode_En',
        'ReligionName_Ar',
        'ReligionName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
