<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialStatus extends Model
{
    use HasFactory;

    protected $primaryKey = 'SocialStatusID';
    protected $table = 'socialstatus';
    public $timestamps = false;
    protected $fillable = [
        'SocialStatusID',
        'SocialStatusCode_Ar',
        'SocialStatusCode_En',
        'SocialStatusName_Ar',
        'SocialStatusName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
