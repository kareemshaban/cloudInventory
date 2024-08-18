<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtRestCategoryIcon extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'ltrestcategoryicon';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'IconName',
        'Icon',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
