<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemCollections extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'stitemcollections';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ID',
        'MainItemID',
        'ItemID',
        'MeasureUnitID',
        'AmountValue',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
