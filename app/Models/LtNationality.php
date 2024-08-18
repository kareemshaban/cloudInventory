<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtNationality extends Model
{
    use HasFactory;
    protected $primaryKey = 'NationalityID';
    protected $table = 'ltnationality';
    public $timestamps = false;
    protected $fillable = [
        'NationalityID',
        'NationalityCode_Ar',
        'NationalityCode_En',
        'NationalityName_Ar',
        'NationalityName_En',
        'isExempt',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
