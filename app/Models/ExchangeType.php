<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeType extends Model
{
    use HasFactory;
    protected $primaryKey = 'ExchangeTypeID';
    protected $table = 'exchangetype';
    public $timestamps = false;
    protected $fillable = [
        'ExchangeTypeID',
        'ExchangeTypeCode_Ar',
        'ExchangeTypeCode_En',
        'ExchangeTypeName_Ar',
        'ExchangeTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
