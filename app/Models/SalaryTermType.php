<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryTermType extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryTermsTypeID';
    protected $table = 'salarytermstype';
    public $timestamps = false;
    protected $fillable = [
        'SalaryTermsTypeID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
