<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthenticationUserGroup extends Model
{
    use HasFactory;
    protected $primaryKey = 'AuthenticationID';
    protected $table = 'authenticationusergroup';
    public $timestamps = false;

    protected $fillable = [
        'AuthenticationID',
        'UserGroupId',
        'SellingUnderCost',
        'SellingWithoutBalance',
        'CostPrice',
        'PrintingTimesNO',
        'EditPrintdDocs',
        'EditDate',
        'MaxDiscPercentge',
        'SellingBetweenPrices',
        'MaxDiscBill',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
