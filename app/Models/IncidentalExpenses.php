<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentalExpenses extends Model
{
    use HasFactory;

    protected $primaryKey = 'IncidentalExpensesID';
    protected $table = 'incidentalexpenses';
    public $timestamps = false;
    protected $fillable = [
        'IncidentalExpensesID',
        'IncidentalExpensesDate',
        'Details',
        'Account',
        'IncidentalExpensesAmount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
