<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisDocDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'AnalysisDocDetailsID';
    protected $table = 'analysisdocdetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'AnalysisDocDetailsID',
        'AnalysisDocID',
        'ServicesLabDetailsID',
        'Normal',
        'Unit',
        'Result',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];

}
