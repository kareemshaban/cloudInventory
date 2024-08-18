<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBasedOn extends Model
{
    use HasFactory;

    protected $primaryKey = 'CarBasedOnID';
    protected $table = 'carbasedon';
    public $timestamps = false;

    protected $fillable = [
        'CarBasedOnID',
        'CarBasedOnBillID',
        'CarBasedOnOrderID',
    ];
}
