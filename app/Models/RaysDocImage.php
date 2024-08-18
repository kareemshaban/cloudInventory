<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaysDocImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'RaysDocImageID';
    protected $table = 'raysdocimage';
    public $timestamps = false;
    protected $fillable = [
        'RaysDocImageID',
        'RaysDocImageID',
        'Description',
        'DocImage',
        'DocTypeID',
        'FileIcon',
        'FileName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
