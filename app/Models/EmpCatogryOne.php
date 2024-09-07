<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpCatogryOne extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'empcatogryone';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

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
