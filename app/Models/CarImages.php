<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImages extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'carimages';
    public $timestamps = false;

    protected $fillable = [
        'ID',
        'CarID',
        'Description',
        'ItemImage',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
