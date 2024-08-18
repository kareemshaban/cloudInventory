<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtPeriodTYpe extends Model
{
    use HasFactory;
    protected $primaryKey = 'PeriodTypeID';
    protected $table = 'ltperiodtype';
    public $timestamps = false;
    protected $fillable = [
        'PeriodTypeID',
        'PeriodTypeCode_Ar',
        'PeriodTypeCode_En',
        'PeriodTypeName_Ar',
        'PeriodTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
