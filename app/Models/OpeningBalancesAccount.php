<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningBalancesAccount extends Model
{
    use HasFactory;

    protected $primaryKey = 'OpeningBalancesAccountID';
    protected $table = 'openingbalancesaccount';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'OpeningBalancesAccountID',
        'DocTypeID',
        'OpeningBalancesAccountDate',
        'YearId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
