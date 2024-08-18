<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionSymptom extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrescriptionSymptomID';
    protected $table = 'prescriptionsymptom';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionSymptomID ',
        'PrescriptionID',
        'Notes',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
