<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtCategoryThree extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'ltcategorythree';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'CategoryThreeCode_Ar',
        'CategoryThreeCode_En',
        'CategoryThreeName_Ar',
        'CategoryThreeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
