<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocTypeAccount extends Model
{
    use HasFactory;

    protected $primaryKey = ' DocTypeAccountID';
    protected $table = 'doctypeaccount';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DocTypeAccountID',
        'STDOCTypeID',
        'DebitAccountPrimaryID',
        'DebitAccountID',
        'DebitCostCenterPrimaryID',
        'DebitCostCenterID',
        'CreditAccountPrimaryID',
        'CreditAccountID',
        'CreditCostCenterPrimaryID',
        'CreditCostCenterID',
        'DiscountAccountPrimaryID',
        'DiscountAccountID',
        'DiscountCostCenterPrimaryID',
        'DiscountCostCenterID',
        'CashAccountPrimaryID',
        'CashAccountID',
        'CashCostCenterPrimaryID',
        'CashCostCenterID',
        'TaxAccountPrimaryID',
        'TaxAccountID',
        'TaxCostCenterPrimaryID',
        'TaxCostCenterID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
