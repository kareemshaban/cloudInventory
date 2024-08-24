<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorBankAccount extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'vendorsbankaccount';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'Account_No',
        'Vendor_ID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
