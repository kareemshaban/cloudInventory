<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurancecompany extends Model
{
    use HasFactory;

    protected $primaryKey = 'InsuranceCompanyID';
    protected $table = 'insurancecompany';
    public $timestamps = false;
    protected $fillable = [
        'InsuranceCompanyID',
        'InsuranceCompanyCode_Ar',
        'InsuranceCompanyCode_En',
        'InsuranceCompanyName_Ar',
        'InsuranceCompanyName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
