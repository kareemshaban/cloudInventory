<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenterSecondCategory extends Model
{
    protected $primaryKey = 'CostcenterSecondCatogryID';
    protected $table = 'costcentersecondcatogry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CostcenterSecondCatogryID',
        'CostcenterSecondCatogryNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
