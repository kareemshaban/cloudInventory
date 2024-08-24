<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StTransactionStockIn extends Model
{
    use HasFactory;
    protected $primaryKey = 'TransactionID';
    protected $table = 'sttransactionstockin';
    public $timestamps = false;
    protected $fillable = [
        'TransactionID',
        'StockID',
        'DocNo',
        'Fixed',
        'BasedOn',
        'BasedOnNO',
        'BasedOnFixed',
        'DocTypeID',
        'SupplierID',
        'EntryDate',
        'Remarks',
        'isSystimatic',
        'approved',
        'isOpenning',
        'nodeKey',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
