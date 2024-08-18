<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillClassification extends Model
{
    use HasFactory;

    protected $primaryKey = 'BillClassificationId';
    protected $table = 'billclassification';
    public $timestamps = false;

    protected $fillable = [
        'BillClassificationId',
        'BillClassificationNameAR',
        'BillClassificationNameEN',
        'BillClassificationNameCodeAR',
        'BillClassificationNameCodeEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
