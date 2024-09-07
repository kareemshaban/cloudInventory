<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtItemType extends Model
{
    use HasFactory;
    protected $primaryKey = 'ItemTypeID';
    protected $table = 'ltitemtype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ItemTypeID',
        'ItemTypeCode_Ar',
        'ItemTypeCode_En',
        'ItemTypeName_Ar',
        'ItemTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
