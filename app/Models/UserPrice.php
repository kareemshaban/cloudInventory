<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPrice extends Model
{
    use HasFactory;
    protected $primaryKey = 'UserPriceID';
    protected $table = 'userprice';
    public $timestamps = false;
    protected $fillable = [
        'UserPriceID',
        'LoginID',
        'PriceSystemTypeID',
        'permission',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
