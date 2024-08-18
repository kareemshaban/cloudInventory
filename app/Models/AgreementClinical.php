<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementClinical extends Model
{
    use HasFactory;
    protected $primaryKey = 'AgreeMentClinicalID';
    protected $table = 'agreementclinical';
    public $timestamps = false;
    protected $fillable = [
        'AgreeMentClinicalID',
        'AgreeMentNO',
        'RequestDate',
        'AgreementDate',
        'PatientID',
        'DoctorID',
        'CompanyID',
        'InsuranceNO',
        'PathientclassID',
        'Status',
        'Notes',
        'Total',
        'Discount',
        'AddValue',
        'Net',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
