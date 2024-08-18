<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntryDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DailyEntryDetailsID';
    protected $table = 'dailyentrydetails';
    public $timestamps = false;

    protected $fillable = [
        'DailyEntryDetailsID',
        'AccountsTree',
        'DailyEntryID',
        'Notes',
        'CreditAmount',
        'DepitAmount',
        'Currency',
        'FirstCostCenter',
        'SecondCostCenter',
        'AcountType',
        'Ledger',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
