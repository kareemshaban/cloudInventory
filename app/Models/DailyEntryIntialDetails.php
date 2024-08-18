<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntryIntialDetails extends Model
{
    use HasFactory;

    protected $primaryKey = 'DailyEntryIntialDetailsID';
    protected $table = 'dailyentryintialdetails';
    public $timestamps = false;

    protected $fillable = [
        'DailyEntryIntialDetailsID',
        'AccountsTree',
        'DailyEntryIntialID',
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
