<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryTermUsed extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryTermsUsedID';
    protected $table = 'salarytermsused';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalaryTermsUsedID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
