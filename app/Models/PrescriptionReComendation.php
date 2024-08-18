<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionReComendation extends Model
{
    use HasFactory;

    protected $primaryKey = 'PrescriptionRecomendationID';
    protected $table = 'prescriptionrecomendation';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionRecomendationID',
        'PrescriptionID',
        'Notes',
        'RecomindationId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
