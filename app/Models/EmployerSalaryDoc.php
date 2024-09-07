<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSalaryDoc extends Model
{
    use HasFactory;

    protected $primaryKey = 'EmployerSalaryDocID';
    protected $table = 'employersalarydoc';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'EmployerSalaryDocID',
        'DocTypeID',
        'DocID',
        'WritingDate',
        'EmployerID',
        'DepartementID',
        'SalaryPeriodTypeID',
        'SalaryPeriodID',
        'CurrancyID',
        'Note',
        'Additional',
        'Deduction',
        'Net',
        'other',
        'EmployerDocNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
