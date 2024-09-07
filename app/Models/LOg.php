<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LOg extends Model
{
    use HasFactory;
    protected $primaryKey = 'LogID';
    protected $table = 'log';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'LogID',
        'FormID',
        'ActionID',
        'LoginID',
        'Details',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
