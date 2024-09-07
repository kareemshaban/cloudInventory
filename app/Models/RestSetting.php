<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestSetting extends Model
{
    use HasFactory;

    protected $primaryKey = 'RestSettingID';
    protected $table = 'restsetting';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RestSettingID',
        'DocTypeRestBillID',
        'DocBillID',
        'SalesDocId',
        'SalesDocTypeId',
        'ServicePrice',
        'StoreId',
        'DocTypeCreditRestBillID',
        'MultiPayement',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];

}
