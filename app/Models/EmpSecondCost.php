<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpSecondCost extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmpCostSecondID';
    protected $table = 'empsecondcost';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'EmpCostSecondID',
        'CostCenterID',
        'EmployerID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
