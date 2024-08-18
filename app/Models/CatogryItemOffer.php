<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatogryItemOffer extends Model
{
    use HasFactory;

    protected $primaryKey = 'CatogryItemOfferID';
    protected $table = 'catogryitemoffer';
    public $timestamps = false;

    protected $fillable = [
        'CatogryItemOfferID',
        'ItemID',
        'OfferCatogryID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
