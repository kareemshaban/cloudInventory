<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryTaxGuid extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryTaxGuidID';
    protected $table = 'salarytaxguid';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalaryTaxGuidID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
