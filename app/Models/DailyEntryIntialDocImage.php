<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntryIntialDocImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailyEntryIntialDocImageID';
    protected $table = 'dailyentryintialdocimage';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DailyEntryIntialDocImageID',
        'DailyEntryIntialId',
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
