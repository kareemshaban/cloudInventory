<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'itemsize';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'ItemID',
        'SizeID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
