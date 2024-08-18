<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtCategoryType extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'ltcategorytype';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'CategoryTypeCode_Ar',
        'CategoryTypeCode_En',
        'CategoryTypeName_Ar',
        'CategoryTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
