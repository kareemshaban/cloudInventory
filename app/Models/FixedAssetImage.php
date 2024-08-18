<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAssetImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'fixedassetimage';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'FixedAssetID',
        'Description',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
