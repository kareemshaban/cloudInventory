<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtPriceSystemType extends Model
{
    use HasFactory;
    protected $primaryKey = 'PriceSystemTypeID';
    protected $table = 'ltpricesystemtype';
    public $timestamps = false;
    protected $fillable = [
        'PriceSystemTypeID',
        'PriceSystemTypeCode_Ar',
        'PriceSystemTypeCode_En',
        'PriceSystemTypeName_Ar',
        'PriceSystemTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];

}
