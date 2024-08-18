<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insturement extends Model
{
    use HasFactory;

    protected $primaryKey = 'InsturementID';
    protected $table = 'insturement';
    public $timestamps = false;
    protected $fillable = [
        'InsturementID',
        'NameAr',
        'Code',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
