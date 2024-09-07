<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEmployment extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailyEmploymentID';
    protected $table = 'dailyemployment';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DailyEmploymentID',
        'ItemID',
        'DocNO',
        'Day',
        'Date',
        'EmployerID',
        'Contractorfees',
        'MenPerDay',
        'WomenPerDay',
        'Day_CategorySalary',
        'CostPerDay',
        'MenPerNight',
        'WomenPerNight',
        'WorkersPerDay',
        'WorkersPerNight',
        'Night_CategorySalary',
        'CostPerNight',
        'QuantityOfProduction',
        'MeasureUnitID',
        'Price',
        'CostForQuantity',
        'NoOfWorkers',
        'CommissionAndTransport',
        'CostForWorkers',
        'CostForProduction',
        'TotalCost',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];

}
