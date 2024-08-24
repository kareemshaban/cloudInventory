<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorFirstCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorCatogryID';
    protected $table = 'vendorfirstcatogry';
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
