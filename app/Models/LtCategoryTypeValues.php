<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtCategoryTypeValues extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'ltcategorytypevalues';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'CategoryTypeID',
        'CategoryValueCode_Ar',
        'CategoryValueCode_En',
        'CategoryValueName_Ar',
        'CategoryValueName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
