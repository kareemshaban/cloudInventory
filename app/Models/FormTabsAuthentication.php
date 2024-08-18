<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTabsAuthentication extends Model
{
    use HasFactory;

    protected $primaryKey = 'FormTabsAuthenticationID';
    protected $table = 'formtabsauthentication';
    public $timestamps = false;
    protected $fillable = [
        'FormTabsAuthenticationID',
        'LoginID',
        'FormTabID',
        'AuthenticationLogin',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
