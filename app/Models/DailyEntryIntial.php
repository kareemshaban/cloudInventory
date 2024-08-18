<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntryIntial extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailyEntryIntialID';
    protected $table = 'dailyentryintial';
    public $timestamps = false;

    protected $fillable = [
        'DailyEntryIntialID',
        'DocType',
        'DocID',
        'DailyEntryNo',
        'DailyEntryDateTime',
        'Description',
        'BasedONDocTypeID',
        'BasedONDocID',
        'BasedONDocTypeNO',
        'TotalCredit',
        'Difference',
        'TotalDepit',
        'Approved',
        'uploaded',
        'nodeKey',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
