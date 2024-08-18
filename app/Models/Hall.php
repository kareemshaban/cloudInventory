<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $primaryKey = 'HallID';
    protected $table = 'hall';
    public $timestamps = false;
    protected $fillable = [
        'HallID',
        'HallCode_Ar',
        'HallName_Ar',
        'HallName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
