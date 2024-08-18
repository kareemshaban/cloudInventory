<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAuthentication extends Model
{
    use HasFactory;

    protected $primaryKey = 'FormAuthenticationID';
    protected $table = 'formauthentication';
    public $timestamps = false;
    protected $fillable = [
        'FormAuthenticationID',
        'LoginID',
        'FormID',
        'AuthenticationLogin',
        'UserAdmin',
        'UserAdd',
        'UserEdit',
        'UserBrowser',
        'UserDelete',
        'UserSearch',
        'UserPrint',
        'UserApprove',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
