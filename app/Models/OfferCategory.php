<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'OfferCatogryID';
    protected $table = 'offercatogry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'OfferCatogryID',
        'OfferID',
        'CatogryID',
        'UnitLevelID',
        'Quantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
