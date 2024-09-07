<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorTreatment extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorTreatmentID';
    protected $table = 'vendortreatment';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'VendorTreatmentID',
        'PrescriptionID',
        'VendorID',
        'ItemID',
        'Dosage',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
