<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = 'RoomID';
    protected $table = 'room';
    public $timestamps = false;
    protected $fillable = [
        'RoomID',
        'FloorID',
        'RommTypeID',
        'NameAr',
        'Code',
        'NameEN',
        'IsAvailable',
        'price',
        'RoomClassID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
