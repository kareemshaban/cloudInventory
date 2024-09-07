<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpCostFirst extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmpCostFirstID';
    protected $table = 'empcostfirst';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'EmpCostFirstID',
        'CostCenterID',
        'EmployerID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
