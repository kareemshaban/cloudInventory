<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouritList extends Model
{
    use HasFactory;

    protected $primaryKey = 'FavId';
    protected $table = 'favoritelist';
    public $timestamps = false;
    protected $fillable = [
        'FavId',
        'loginId',
        'FormNameEN',
        'FormNameAR',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
