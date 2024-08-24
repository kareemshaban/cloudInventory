<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorResponsable extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorResponsableID';
    protected $table = 'vendorresponsable';
    public $timestamps = false;
    protected $fillable = [
        'VendorResponsableID',
        'NameEN',
        'Code',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
