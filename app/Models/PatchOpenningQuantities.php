<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatchOpenningQuantities extends Model
{
    use HasFactory;
    protected $primaryKey = 'patchId';
    protected $table = 'patch';
    public $timestamps = false;
    protected $fillable = [
        'patchId',
        'ItemID',
        'PurchasePrice',
        'patch',
        'ItemQuantity',
        'StoreId',
        'ItemUnit',
        'isExp',
        'patchOrder',
        'ExpDate',
        'StartDate',
        'Salesprice',
        'ItemType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
