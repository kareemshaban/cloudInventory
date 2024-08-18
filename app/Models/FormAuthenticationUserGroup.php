<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAuthenticationUserGroup extends Model
{
    use HasFactory;
    protected $primaryKey = 'FormAuthenticationGroupID';
    protected $table = 'formauthenticationusergroup';
    public $timestamps = false;
    protected $fillable = [
        'FormAuthenticationID',
        'UserGroupsID',
        'FormID',
        'AuthenticationLogin',
        'UserGroupAdmin',
        'UserGroupAdd',
        'UserGroupEdit',
        'UserGroupBrowser',
        'UserGroupDelete',
        'UserGroupSearch',
        'UserGroupPrint',
        'UserGroupApprove',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
