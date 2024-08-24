<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryTermsFieldApplay extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryTermsFeildApplayID';
    protected $table = 'salarytermsfeildapplay';
    public $timestamps = false;
    protected $fillable = [
        'SalaryTermsFeildApplayID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
