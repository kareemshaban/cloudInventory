<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroupDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'UserGroupDetailsID';
    protected $table = 'usergroupdetails';
    public $timestamps = false;
    protected $fillable = [
        'UserGroupDetailsID',
        'LoginID',
        'UserGroupId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
