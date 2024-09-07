<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtTemp extends Model
{
    use HasFactory;

    protected $primaryKey = 'TempID';
    protected $table = 'lttemp';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'TempID',
        'TempCode_Ar',
        'TempCode_En',
        'TempName_Ar',
        'TempName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
