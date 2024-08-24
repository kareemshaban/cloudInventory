<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    use HasFactory;
    protected $primaryKey = 'regid';
    protected $table = 'trial';
    public $timestamps = false;
    protected $fillable = [
        'regid',
        'RegisterationID'
    ];
}
