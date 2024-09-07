<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestSalesBillDetailsDeleted extends Model
{
    use HasFactory;
    protected $primaryKey = 'RestSalesBillDetailsDeletedId';
    protected $table = 'restsalesbilldetailsdeleted';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RestSalesBillDetailsDeletedId',
        'RestSalesBillId',
        'ItemId',
        'ItemQuantity',
        'ItemUnit',
        'StorId',
        'ItemPrice',
        'ItemTotalRow',
        'ItemNots',
        'ItemType',
        'CategoryId',
        'NewQuantity',
        'TotalAddedValue',
        'IsNewItem',
        'isDeleted',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
