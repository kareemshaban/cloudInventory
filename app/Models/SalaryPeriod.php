<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryPeriod extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryPeriodID';
    protected $table = 'salaryperiod';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalaryPeriodID',
        'Code',
        'name',
        'StartDate',
        'EndDate',
        'SalaryPeriodCode',
        'SalaryPeriodName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
