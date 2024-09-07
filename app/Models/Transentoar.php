<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transentoar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'transentoar';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'id',
        'english',
        'arabic',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
