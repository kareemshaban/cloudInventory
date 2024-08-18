<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsTree extends Model
{
    use HasFactory;

    protected $primaryKey = 'AccountsTreeId';
    protected $table = 'accountstree';
    public $timestamps = false;

    protected $fillable = [
        'AccountsTreeId',
        'AccountParentId',
        'AccontNameAR',
        'AccontNameEN',
        'AccontNameCodeAr',
        'Currency',
        'AccountLevel',
        'AccountNatural',
        'Department',
        'DestructionID',
        'AcountMount',
        'AcountFirstCatogryID',
        'AcountSecondCatogryID',
        'AcountThirdCatogryID',
        'CostCenterTypeID',
        'DefaultCostcenter',
        'AcountTypeID',
        'AccontNameCodeEn',
        'ReportAppearID',
        'Amount',
        'account_list',
        'manualJournals',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
