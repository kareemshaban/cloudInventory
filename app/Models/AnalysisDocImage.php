<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisDocImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'AnalysisDocImageID';
    protected $table = 'analysisdocimage';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'AnalysisDocImageID',
        'AnalysisDocID',
        'Description',
        'DocImage',
        'DocTypeID',
        'FileIcon',
        'FileName',
        'FileExtension',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
