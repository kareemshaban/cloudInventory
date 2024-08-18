<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $primaryKey = 'CityID';
    protected $table = 'city';
    public $timestamps = false;

    protected $fillable = [
        'CityID',
        'CityCode_Ar',
        'CityCode_En',
        'CityName_Ar',
        'CityName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
