<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StTransactionStockOut extends Model
{
    use HasFactory;
    protected $primaryKey = 'TransactionID';
    protected $table = 'sttransactionstockout';
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
        'node',
        'uploaded',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
