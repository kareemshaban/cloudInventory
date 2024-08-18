<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $primaryKey = 'PlaceId';
    protected $table = 'place';
    public $timestamps = false;
    protected $fillable = [
        'PlaceId',
        'Code',
        'Name',
        'Specialest',
        'Addresse',
        'Telphone',
        'Commission',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',

    ];
}
