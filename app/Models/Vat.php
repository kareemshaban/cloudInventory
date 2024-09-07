<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vat extends Model
{
    use HasFactory;
    protected $primaryKey = 'VatID';
    protected $table = 'vat';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'VatID',
        'NameAR',
        'NameEN',
        'Rat',
        'IsAddedvalue',
        'ISAllItem',
        'VatNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
