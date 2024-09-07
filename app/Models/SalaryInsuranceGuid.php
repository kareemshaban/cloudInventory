<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryInsuranceGuid extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryInsuranceGuidID';
    protected $table = 'salaryinsuranceguid';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalaryInsuranceGuidID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
