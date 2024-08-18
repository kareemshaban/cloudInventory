<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryAccount extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrimaryAccountID';
    protected $table = 'primaryaccount';
    public $timestamps = false;
    protected $fillable = [
        'PrimaryAccountID',
        'Name',
        'NameEn',
        'type',
        'isStock',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
