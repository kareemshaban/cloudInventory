<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentVoucher extends Model
{
    use HasFactory;
    protected $primaryKey = 'PaymentVoucherID';
    protected $table = 'paymentvoucher';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'PaymentVoucherID',
        'DocNo',
        'DocID',
        'DoctypeID',
        'EditsHistory',
        'Account',
        'VendorID',
        'amount',
        'currencyType',
        'currencyFactor',
        'localCurrency',
        'Branch',
        'Note',
        'EmployerID',
        'Type',
        'beneficiary',
        'CheekNo',
        'BankFIle',
        'dueDate',
        'Match',
        'Total',
        'Remaining',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',

    ];
}
