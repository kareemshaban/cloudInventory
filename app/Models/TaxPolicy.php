<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxPolicy extends Model
{
    use HasFactory;
    protected $primaryKey = 'TaxpolicyID';
    protected $table = 'taxpolicy';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'TaxpolicyID',
        'NameAr',
        'NameEN',
        'Ratio',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
