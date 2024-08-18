<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'points';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'FromPrice',
        'ToPrice',
        'Points',
        'State',
        'fromDate',
        'toDate',
        'ItemId',
        'isItem',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
