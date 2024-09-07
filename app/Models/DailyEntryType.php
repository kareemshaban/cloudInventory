<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntryType extends Model
{
    use HasFactory;

    protected $primaryKey = 'DailyEntryTypeId';
    protected $table = 'dailyentrytype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DailyEntryTypeId',
        'DailyEntryTypeName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
