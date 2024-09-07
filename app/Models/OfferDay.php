<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferDay extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'OfferDayID';
    protected $table = 'offerday';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'OfferDayID',
        'WeakDaysId',
        'OfferID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
