<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatchReceipt extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'catchreceipt';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

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
        'approved',
        'Collecter',
        'Patient',
        'Company',
        'Cash',
        'Cashier',
        'edited',
        'isRetrieved',
        'docNo',
        'node',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
