<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRegisteration extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'carregisteration';
    public $timestamps = false;

    protected $fillable = [
        'ID',
        'CarID',
        'EntryTime',
        'ExitTIme'
    ];
}
