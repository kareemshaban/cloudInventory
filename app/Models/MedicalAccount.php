<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAccount extends Model
{
    use HasFactory;

    protected $primaryKey = 'MedicalAccountID';
    protected $table = 'medicalaccount';
    public $timestamps = false;
    protected $fillable = [
        'MedicalAccountID',
        'BoxAccountID',
        'BankAccountID',
        'SafeAccountID',
        'DocID',
        'DocTypeID',
        'TaxAccountID',
        'NetAccountID',
        'DocIDCredit',
        'DocTypeIDCredit',
        'NetIndexType',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
