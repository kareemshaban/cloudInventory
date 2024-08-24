<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorType extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorTypeID';
    protected $table = 'vendortype';
    public $timestamps = false;
    protected $fillable = [
        'VendorTypeID',
        'VendorTypCodee_Ar',
        'VendorTypeCode_En',
        'VendorTypeName_Ar',
        'VendorTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
