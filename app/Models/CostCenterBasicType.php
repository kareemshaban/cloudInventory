<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenterBasicType extends Model
{
    use HasFactory;
    protected $primaryKey = 'CostcenterBasicTypeID';
    protected $table = 'costcenterbasictype';
    public $timestamps = false;

    protected $fillable = [
        'CostcenterBasicTypeID',
        'CostcenterBasicTypeNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
