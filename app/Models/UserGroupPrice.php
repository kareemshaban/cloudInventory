<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroupPrice extends Model
{
    use HasFactory;
    protected $primaryKey = 'UserPriceID';
    protected $table = 'usergroupprice';
    public $timestamps = false;
    protected $fillable = [
        'UserPriceID',
        'UserGroupId',
        'PriceSystemTypeID',
        'permission',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
