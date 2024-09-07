<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'PayBillID';
    protected $table = 'paybill';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PayBillID',
        'BillID',
        'DocID',
        'VendorID',
        'Doctypebasicid',
        'Amount',
        'PaidAmount',
        'IsPayed',
        'PayBillDate',
        'DoctorID',
        'CatchReceiptID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
