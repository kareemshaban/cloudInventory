<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemsCategoryType extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'stitemscategorytype';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'ItemID',
        'LTCategoryTypeID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
