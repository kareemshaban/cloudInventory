<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtAssetCatThird extends Model
{
    use HasFactory;

    protected $primaryKey = 'LtAssetCatThirdID';
    protected $table = 'ltassetcatthird';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'LtAssetCatThirdID',
        'NameAr',
        'NameEn',
        'Code',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
