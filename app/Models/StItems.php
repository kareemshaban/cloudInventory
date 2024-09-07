<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItems extends Model
{
    use HasFactory;
    protected $primaryKey = 'ItemID';
    protected $table = 'stitems';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ItemID',
        'ItemNo',
        'ItemCode_Ar',
        'ItemCode_En',
        'ItemName_Ar',
        'ItemName_En',
        'ItemTypeID',
        'IsExpired',
        'Status',
        'PeriodExpiredAlarm',
        'WarrantyPeriod',
        'BasicGroup',
        'BranchGroup',
        'CategoryThreeId',
        'ItemVolume',
        'ItemSize',
        'ItemColor',
        'ItemWeight',
        'userId',
        'userGroupId',
        'addedValue',
        'Concentration',
        'Notes',
        'QR',
        'fast_item',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
