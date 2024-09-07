<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectingOrderDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'CollectingOrderDetailsID';
    protected $table = 'collectingorderdetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CollectingOrderDetailsID',
        'CollectingOrderID',
        'ServiceID',
        'price',
        'quantity',
        'Discount',
        'total',
        'UsedQuantity',
        'addedValue',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
