<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemWeight extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'itemweight';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'ItemID',
        'WeightID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
