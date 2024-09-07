<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalAddedValue extends Model
{
    use HasFactory;
    protected $primaryKey = 'TotalAddedValueId';
    protected $table = 'totaladdedvalue';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'TotalAddedValueId',
        'Date',
        'SalesTAD',
        'SalesReturnTAD',
        'PurchasesTAD',
        'PurchasesReturnTAD',
        'StoreId',
        'expensesTAD'
    ];
}
