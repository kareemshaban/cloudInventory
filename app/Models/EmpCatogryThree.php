<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpCatogryThree extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'empcatogrythree';
    public $timestamps = false;

    protected $fillable = [
        'ID',
        'Code',
        'Name_Ar',
        'Name_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
