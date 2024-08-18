<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileDevices extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'mobile_devices';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'device_serial',
        'state'
    ];
}
