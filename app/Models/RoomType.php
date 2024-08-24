<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $primaryKey = 'RoomTypeID';
    protected $table = 'roomtype';
    public $timestamps = false;
    protected $fillable = [
        'RoomTypeID',
        'Code',
        'Name_Ar',
        'Name_En',
        'price',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
