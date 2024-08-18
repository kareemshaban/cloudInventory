<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinterSetting extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrintersettingID';
    protected $table = 'printersetting';
    public $timestamps = false;
    protected $fillable = [
        'PrintersettingID',
        'IsWithHearder',
        'Header',
        'WritingDirection',
        'FontType',
        'FontSize',
        'FontColor',
        'ParagraphDirection',
        'Footer',
        'TopOutLine',
        'BottomOutLine',
        'IsAllPages',
        'languages',
        'Logo',
        'SalesNotes',
        'QuotesNotes',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
