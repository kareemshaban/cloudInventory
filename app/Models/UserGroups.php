<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    use HasFactory;
    protected $primaryKey = 'UserGroupId';
    protected $table = 'usergroups';
    public $timestamps = false;
    protected $fillable = [
        'UserGroupId',
        'userGroupCode',
        'groupName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
