<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasedOn extends Model
{
    use HasFactory;

    protected $primaryKey = 'BasedOnId';
    protected $table = 'basedon';
    public $timestamps = false;

    protected $fillable = [
        'BarCodeDesignHeader_id',
        'BasedOnName',
        'BillID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
