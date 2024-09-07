<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntry extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailyEntryID';
    protected $table = 'dailyentry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DailyEntryID',
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
