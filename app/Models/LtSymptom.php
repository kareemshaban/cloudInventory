<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtSymptom extends Model
{
    use HasFactory;
    protected $primaryKey = 'SymptomID';
    protected $table = 'ltsymptom';
    public $timestamps = false;
    protected $fillable = [
        'SymptomID',
        'SymptomCode',
        'SymptomNameAr',
        'DoctorID',
        'Details',
        'SymptomNameEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
