<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerContractType extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployerContractTypeID';
    protected $table = 'employercontracttype';
    public $timestamps = false;

    protected $fillable = [
        'EmployerContractTypeID',
        'NameAr',
        'NameEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
