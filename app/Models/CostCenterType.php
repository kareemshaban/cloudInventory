<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenterType extends Model
{
    use HasFactory;
    protected $primaryKey = 'CostCenterTypeID';
    protected $table = 'costcentertype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CostCenterTypeID',
        'CostCenterTypeNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
