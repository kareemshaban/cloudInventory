<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorThirdCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorCatogryID';
    protected $table = 'vendorthirdcatogry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
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
