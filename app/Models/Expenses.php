<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $primaryKey = 'ExpensesID';
    protected $table = 'expenses';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ExpensesID',
        'DocType',
        'BillNo',
        'DocID',
        'ExpensesDate',
        'Entry',
        'Details',
        'ExpensesAmount',
        'ExpensesTypeID',
        'ToFileId',
        'approved',
        'with_tax',
        'taxRatio',
        'taxAmount',
        'nodeKey',
        'invoiceNo',
        'vendorName',
        'vendorVatNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
