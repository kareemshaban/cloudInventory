<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'voucher';
    public $timestamps = false;
    protected $fillable = [
        'VendorID ',
        'no',
        'vendor_id',
        'from_date',
        'to_date',
        'limit',
        'is_used',
        'used_amount',
        'sales_bill_id',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
