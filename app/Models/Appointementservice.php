<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointementservice extends Model
{
    use HasFactory;

    protected $primaryKey = 'AppointementServiceID';
    protected $table = 'appointementservice';
    public $timestamps = false;

    protected $fillable = [
        'AppointementServiceID',
        'AppointementID',
        'ServiceID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
