<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'exchange';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'DocType',
        'BillNo',
        'DocID',
        'Date',
        'Vendor',
        'Entry',
        'Details',
        'Amount',
        'BankName',
        'ChickNo',
        'Payee',
        'BankNotes',
        'Collecter',
        'Approved',
        'Patient',
        'Company',
        'edited',
        'isRetrieved',
        'VendorBillNo',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
