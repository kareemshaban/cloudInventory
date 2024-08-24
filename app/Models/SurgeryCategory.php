<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'SurgeryCatogryID';
    protected $table = 'surgerycatogry';
    public $timestamps = false;
    protected $fillable = [
        'SurgeryCatogryID',
        'NameAr',
        'Code',
        'NameEN',
        'Price',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
