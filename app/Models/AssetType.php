<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetType extends Model
{
    use HasFactory;
    protected $primaryKey = 'AssetTypeID';
    protected $table = 'assettype';
    public $timestamps = false;
    protected $fillable = [
        'AssetTypeID',
        'NameAR',
        'NameEN',
        'Code',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
