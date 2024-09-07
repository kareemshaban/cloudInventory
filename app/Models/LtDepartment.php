<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtDepartment extends Model
{
    use HasFactory;

    protected $primaryKey = 'DepartementID';
    protected $table = 'ltdepartement';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'DepartementID',
        'DepartementParent',
        'DepartementCode_Ar',
        'DepartementCode_En',
        'DepartementName_Ar',
        'DepartementName_En',
        'DepartementLevel',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
