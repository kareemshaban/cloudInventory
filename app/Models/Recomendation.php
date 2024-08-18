<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{
    use HasFactory;
    protected $primaryKey = 'RecomendationID';
    protected $table = 'recomendation';
    public $timestamps = false;
    protected $fillable = [
        'RecomendationID',
        'Code',
        'Name',
        'NameEn',
        'DoctorID',
        'Details',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
