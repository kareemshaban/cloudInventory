<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'BedItemID';
    protected $table = 'beditem';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'BedItemID',
        'ItemId',
        'BedID',
        'ItemUnit',
        'ItemQuantity',
        'Repeat',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
