<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSecondCatogry extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorCatogryID';
    protected $table = 'vendorsecondcatogry';
    public $timestamps = false;
    protected $fillable = [
        'VendorCatogryID',
        'Code',
        'NameAr',
        'NameEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
