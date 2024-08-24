<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $primaryKey = 'TownID';
    protected $table = 'town';
    public $timestamps = false;
    protected $fillable = [
        'TownID',
        'GovernorateID',
        'TownCode_Ar',
        'TownCode_En',
        'TownName_Ar',
        'TownName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
