<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    protected $primaryKey = 'InstallmentID';
    protected $table = 'installment';
    public $timestamps = false;
    protected $fillable = [
        'InstallmentID',
        'VendorID',
        'InstallmentPayDate',
        'InstallmentPayDateActual',
        'InstallmentAmount',
        'InstallmentAmountAcutal',
        'RegisterationID',
        'AccountID',
        'InstallmentTypeID',
        'DocNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
