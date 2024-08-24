<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLabBill extends Model
{
    use HasFactory;
    protected $primaryKey = 'ServiceLabBillID';
    protected $table = 'servicelabbill';
    public $timestamps = false;
    protected $fillable = [
        'ServiceLabBillID',
        'BillID',
        'ServiceID',
        'PatientID',
        'FirstCatogryID',
        'StatusID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
