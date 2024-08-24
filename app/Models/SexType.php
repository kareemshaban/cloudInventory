<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SexType extends Model
{
    use HasFactory;
    protected $primaryKey = 'SexTypeID';
    protected $table = 'sextype';
    public $timestamps = false;
    protected $fillable = [
        'SexTypeID',
        'SexTypeCode_Ar',
        'SexTypeCode_En',
        'SexTypeName_Ar',
        'SexTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
