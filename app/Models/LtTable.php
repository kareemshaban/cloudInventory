<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtTable extends Model
{
    use HasFactory;

    protected $primaryKey = 'TableID';
    protected $table = 'lttable';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'TableID',
        'HallID',
        'TableCode_Ar',
        'TableName_Ar',
        'TableName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
