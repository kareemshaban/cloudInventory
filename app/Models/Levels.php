<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    use HasFactory;

    protected $primaryKey = 'LevelID';
    protected $table = 'levels';
    public $timestamps = false;
    protected $fillable = [
        'LevelID',
        'LevelCode_Ar',
        'LevelCode_En',
        'LevelName_Ar',
        'LevelName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
