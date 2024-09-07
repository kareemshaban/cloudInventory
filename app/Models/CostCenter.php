<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenter extends Model
{
    use HasFactory;
    protected $primaryKey = 'CostcenterID';
    protected $table = 'costcenter';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CostcenterID',
        'CostcenterNo',
        'CostcenterName',
        'CostcenterDetails',
        'CostcenterNameEN',
        'ParentID',
        'CostcenterBasicTypeID',
        'CostcenterFirstCatogryID',
        'CostcenterSecondCatogryID',
        'CostcenterThirdCatogry',
        'LevelID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
