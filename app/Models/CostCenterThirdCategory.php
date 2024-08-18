<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenterThirdCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'CostcenterThirdCatogryID';
    protected $table = 'costcenterthirdcatogry';
    public $timestamps = false;

    protected $fillable = [
        'CostcenterThirdCatogryID',
        'CostcenterThirdCatogryNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
