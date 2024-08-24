<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueMethod extends Model
{
    use HasFactory;
    protected $primaryKey = 'ValueMethodID';
    protected $table = 'valuemethod';
    public $timestamps = false;
    protected $fillable = [
        'ValueMethodID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
