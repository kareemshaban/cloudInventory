<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntryDocImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailyEntryDocImageID';
    protected $table = 'dailyentrydocimage';
    public $timestamps = false;

    protected $fillable = [
        'DailyEntryDocImageID',
        'DailyEntryId',
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
