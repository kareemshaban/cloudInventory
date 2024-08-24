<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorXray extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorX_RaysID';
    protected $table = 'vendorx_rays';
    public $timestamps = false;
    protected $fillable = [
        'VendorX_RaysID',
        'PrescriptionID',
        'VendorID',
        'X_RaysID',
        'instructions',
        'VendorX_RaysReult',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
