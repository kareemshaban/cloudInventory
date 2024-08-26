<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;
    protected $primaryKey = 'CompanyInformationID';
    protected $table = 'companyinformation';
    public $timestamps = false;

    protected $fillable = [
        'CompanyInformationID',
        'NameAR',
        'ShortNameAR',
        'NameEn',
        'ShortNameEN',
        'FullNameARFirst',
        'FullNameARSecond',
        'FullNameENFirst',
        'FullNameENSecond',
        'Owner',
        'ActivityAR',
        'ActivityEN',
        'license',
        'CommercialRegistration',
        'PhoneFirst',
        'PhoneSecond',
        'FaxFirst',
        'FaxSecond',
        'fut',
        'fut1',
        'fut2',
        'HospitalUniformNumber',
        'DB_Version',
        'rasdUserName',
        'rasdPassword',
        'installDate',
        'lastUpdateDate',
        'expiryDate',
        'msg',
        'callCenter',
        'stopFirebaseOnly',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
