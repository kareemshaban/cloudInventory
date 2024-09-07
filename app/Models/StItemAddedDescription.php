<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemAddedDescription extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'stitemaddeddescriptions';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ID',
        'ItemID',
        'AddDescription',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
