<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpCostSecond extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmpCostSecondID';
    protected $table = 'empcostsecond';
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
