<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteLogin extends Model
{
    use HasFactory;
    protected $primaryKey = 'SiteLoginID';
    protected $table = 'sitelogin';
    public $timestamps = false;
    protected $fillable = [
        'SiteLoginID',
        'UserName',
        'Password'
    ];
}
