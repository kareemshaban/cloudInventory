<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorAnalysis extends Model
{
    use HasFactory;
    protected $primaryKey = 'VendorAnalysisID';
    protected $table = 'vendoranalysis';
    public $timestamps = false;
    protected $fillable = [
        'VendorAnalysisID',
        'PrescriptionID',
        'VendorID',
        'AnalysisID',
        'instructions',
        'VendorAnalysisReult',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
