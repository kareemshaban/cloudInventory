<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $primaryKey = 'OfferID';
    protected $table = 'offer';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'OfferID',
        'Code',
        'Active',
        'NameAr',
        'NameEN',
        'Details',
        'Price',
        'WithDate',
        'FromDate',
        'ToDate',
        'WithTime',
        'FromTime',
        'ToTime',
        'OfferTypeID',
        'WithBonus',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
