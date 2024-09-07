<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtCurrency extends Model
{
    use HasFactory;

    protected $primaryKey = 'CurrencyID';
    protected $table = 'ltcurrency';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'CurrencyID',
        'CurrencyCode_Ar',
        'CurrencyCode_En',
        'CodeAr',
        'CodeEn',
        'CurrencyName_Ar',
        'CurrencyName_En',
        'CurrencyEBrake',
        'CurrencyAbreak',
        'CurrencyPerBreak',
        'CurrencyIsMain',
        'CurrencyStart',
        'CurDate',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
