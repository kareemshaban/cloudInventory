<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcountSecondCatogry extends Model
{
    use HasFactory;
    protected $primaryKey = 'AcountSecondCatogryID';
    protected $table = 'acountsecondcatogry';
    public $timestamps = false;

    protected $fillable = [
        'AcountSecondCatogryID',
        'AcountSecondCatogryNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];

}
