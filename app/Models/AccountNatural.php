<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountNatural extends Model
{
    use HasFactory;

    protected $primaryKey = 'AccountNaturalId';
    protected $table = 'accountnatural';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'AccountNaturalId',
        'AccountNaturalNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
