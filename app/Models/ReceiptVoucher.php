<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptVoucher extends Model
{
    use HasFactory;

    protected $primaryKey = 'ReceiptVoucherId';
    protected $table = 'receiptvoucher';
    public $timestamps = false;
    protected $fillable = [
        'ReceiptVoucherId',
        'DocNo',
        'DocID',
        'Doctype',
        'EditsHistory',
        'Account',
        'VendorId',
        'Amount',
        'CurrencyType',
        'CurrencyFactor',
        'LocalCurrency',
        'Branch',
        'Note',
        'EmployerId',
        'Type',
        'Beneficiary',
        'CheekNo',
        'BankFile',
        'DueDate',
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
