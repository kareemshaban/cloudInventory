<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;
    protected $primaryKey = 'SurgeryID';
    protected $table = 'surgery';
    public $timestamps = false;
    protected $fillable = [
        'SurgeryID',
        'NameAr',
        'Code',
        'NameEN',
        'DepartementID',
        'SurgeryCatogryID',
        'Price',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
