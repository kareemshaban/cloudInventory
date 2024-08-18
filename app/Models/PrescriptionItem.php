<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrescriptionItemID';
    protected $table = 'prescriptionitem';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionItemID',
        'ItemID',
        'MeasureUnitID',
        'PrescriptionID',
        'Quantity',
        'Instruction',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
