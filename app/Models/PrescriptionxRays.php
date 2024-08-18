<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionxRays extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrescriptionX_RaysID';
    protected $table = 'prescriptionx_rays';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionX_RaysID',
        'X_RaysID',
        'PrescriptionID',
        'Notes',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
