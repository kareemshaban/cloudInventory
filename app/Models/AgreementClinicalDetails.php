<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementClinicalDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'AgreeMentClinicalDetailsID';
    protected $table = 'agreementclinicaldetails';
    public $timestamps = false;

    protected $fillable = [
        'AgreeMentClinicalDetailsID',
        'AgreeMentClinicalID',
        'ServiceID',
        'quantity',
        'Amount',
        'patientID',
        'Discount',
        'AddingValue',
        'Total',
        'isAccepted',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
