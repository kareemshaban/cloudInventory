<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryTermAccountType extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryTermAccountTypeID';
    protected $table = 'salarytermaccounttype';
    public $timestamps = false;
    protected $fillable = [
        'SalaryTermAccountTypeID',
        'AccountTypeAR',
        'AccountTypeEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
