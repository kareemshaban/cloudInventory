<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $primaryKey = 'FormId';
    protected $table = 'forms';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'FormId',
        'FormName',
        'FormNameAr',
        'FormNameEN',
        'ProgramType',
        'Inventory',
        'Medical',
        'Resturant',
        'Accountance',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
