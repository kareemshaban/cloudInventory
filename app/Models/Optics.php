<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optics extends Model
{
    use HasFactory;
    protected $primaryKey = 'OpticsId';
    protected $table = 'optics';
    public $timestamps = false;
    protected $fillable = [
        'OpticsId',
        'RightEyeSPH',
        'RightEyeCYL',
        'RightEyeAccess',
        'LeftEyeSPH',
        'LeftEyeCYL',
        'LeftEyeAccess',
        'IPD',
        'ADD',
        'VendorId'
    ];
}
