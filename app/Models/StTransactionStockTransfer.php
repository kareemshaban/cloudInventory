<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StTransactionStockTransfer extends Model
{
    use HasFactory;

    protected $primaryKey = 'TransactionTransferID';
    protected $table = 'sttransactionstocktransfer';
    public $timestamps = false;
    protected $fillable = [
        'TransactionTransferID',
        'DocNo',
        'DocID',
        'DocTypeID',
        'EntryDate',
        'StoreFromID',
        'StoreToID',
        'Remark',
        'approved',
        'nodeKey',
        'basedDoc',
        'basedNo',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
