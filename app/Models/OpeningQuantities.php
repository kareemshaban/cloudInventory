<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningQuantities extends Model
{
    use HasFactory;

    protected $primaryKey = 'OpenningQuantitiesId';
    protected $table = 'openningquantities';
    public $timestamps = false;
    protected $fillable = [
        'OpenningQuantitiesId',
        'DocType',
        'OpenningQuantitiesNo',
        'Fixed',
        'OpenningQuantitiesVendorId',
        'StorId',
        'OpenningQuantitiesWritingDate',
        'OpenningQuantitiesNots',
        'OpenningQuantitiesAnalysesCode',
        'OpenningQuantitiesTotal',
        'OpenningQuantitiesPayed',
        'OpenningQuantitiesDiscount',
        'OpenningQuantitiesCredit',
        'OpenningQuantitiesNet',
        'Approved',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
