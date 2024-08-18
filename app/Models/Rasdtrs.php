<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rasdtrs extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'rasdtrs';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'invoiceNo',
        'date',
        'request',
        'response',
    ];
}
