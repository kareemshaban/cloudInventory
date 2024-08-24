<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDays extends Model
{
    use HasFactory;
    protected $primaryKey = 'WeakDaysId';
    protected $table = 'weakdays';
    public $timestamps = false;
    protected $fillable = [
        'WeakDaysId ',
        'WeakNameAr',
        'WeakNameEn',
        'code',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
