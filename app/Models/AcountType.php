<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcountType extends Model
{
    use HasFactory;
    protected $primaryKey = 'AcountTypeID';
    protected $table = 'acounttype';
    public $timestamps = false;
    protected $fillable = [
        'AcountTypeID',
        'AcountTypeNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
