<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocTypeBasic extends Model
{
    use HasFactory;
    protected $primaryKey = ' DOCTypeBasicID';
    protected $table = 'doctypebasic';
    public $timestamps = false;

    protected $fillable = [
        'DOCTypeBasicID',
        'DOCTypeBasicCode_Ar',
        'DOCTypeBasicCode_En',
        'DOCTypeBasicName_Ar',
        'DOCTypeBasicName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
