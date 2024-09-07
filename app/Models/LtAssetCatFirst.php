<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtAssetCatFirst extends Model
{
    use HasFactory;

    protected $primaryKey = 'LtAssetCatFirstID';
    protected $table = 'ltassetcatfirst';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'LtAssetCatFirstID',
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
