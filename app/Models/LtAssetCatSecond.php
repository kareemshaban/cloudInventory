<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtAssetCatSecond extends Model
{
    use HasFactory;
    protected $primaryKey = 'LtAssetCatSecondID';
    protected $table = 'ltassetcatsecond';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'LtAssetCatSecondID',
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
