<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTabsAuthenticationUserGroup extends Model
{
    use HasFactory;

    protected $primaryKey = 'FormTabsAuthenticationID';
    protected $table = 'formtabsauthenticationusergroup';
    public $timestamps = false;
    protected $fillable = [
        'FormTabsAuthenticationID',
        'UserGroupId',
        'FormTabID',
        'AuthenticationLogin',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
