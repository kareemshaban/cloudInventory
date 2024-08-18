<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarHistory extends Model
{
    use HasFactory;
    protected $primaryKey = 'CarHistoryID';
    protected $table = 'carhistory';
    public $timestamps = false;

    protected $fillable = [
        'CarHistoryID',
        'CarHistoryBillID',
        'CarID',
    ];
}
