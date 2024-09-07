<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CacheTableUpdate extends Model
{
    use HasFactory;

    protected $primaryKey = 'TableName';
    protected $table = 'cachetableupdate';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'TableName',
        'TimUpdate'
    ];
}
