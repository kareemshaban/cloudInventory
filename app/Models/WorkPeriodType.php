<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPeriodType extends Model
{
    use HasFactory;
    protected $primaryKey = 'WorkPeriodTypeID';
    protected $table = 'workperiodtype';
    public $timestamps = false;
    protected $fillable = [
        'WorkPeriodTypeID',
        'NameAr',
        'NameEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
