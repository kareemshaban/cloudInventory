<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcountthirdCatogry extends Model
{
    use HasFactory;
    protected $primaryKey = 'AcountThirdCatogryID';
    protected $table = 'acountthirdcatogry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'AcountThirdCatogryID',
        'AcountThirdCatogryNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
