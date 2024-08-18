<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestSalesBillDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'RestSalesBillDetailsId';
    protected $table = 'restsalesbilldetails';
    public $timestamps = false;
    protected $fillable = [
        'RestSalesBillDetailsId',
        'RestSalesBillId',
        'ItemId',
        'ItemQuantity',
        'ItemUnit',
        'ItemPrice',
        'ItemTotalRow',
        'ItemNots',
        'ItemType',
        'CategoryId',
        'TotalAddedValue',
        'IsNewItem',
        'NewQuantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
