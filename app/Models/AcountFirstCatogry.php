<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcountFirstCatogry extends Model
{
    use HasFactory;

    protected $primaryKey = 'AcountFirstCatogryID';
    protected $table = 'acountfirstcatogry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'AcountFirstCatogryID',
        'AcountFirstCatogryNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
