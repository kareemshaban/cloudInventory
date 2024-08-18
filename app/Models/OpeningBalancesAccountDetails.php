<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningBalancesAccountDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'OpeningBalancesAccountDetailsID';
    protected $table = 'openingbalancesaccountdetails';
    public $timestamps = false;
    protected $fillable = [
        'OpeningBalancesAccountDetailsID',
        'OpeningBalancesAccountID',
        'AccountsTreeId',
        'Amount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
