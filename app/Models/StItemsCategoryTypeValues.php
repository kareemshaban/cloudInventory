<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemsCategoryTypeValues extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'stitemscategorytypevalues';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ID',
        'ItemID',
        'LTCategoryTypeValuesID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
