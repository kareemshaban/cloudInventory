<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemAlternatives extends Model
{
    use HasFactory;
    protected $primaryKey = 'ItemID';
    protected $table = 'stitemalternatives';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ItemID',
        'AlternativeItemID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
