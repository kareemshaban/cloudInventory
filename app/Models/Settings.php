<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $primaryKey = 'SettingsId';
    protected $table = 'settings';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SettingsId',
        'SettingsPOS',
        'SettingsExpiry',
        'SettingsOrderWithPrices',
        'SettingsAddedValueCheck',
        'SettingsAddedValue',
        'PrinterSettings',
        'TablesNumber',
        'PrinterName',
        'SettingsServicePercentage',
        'isAutoSerial',
        'VendorAutoSerial',
        'decimals_count',
        'UpdateBonds',
        'DeleteBonds',
        'tax_percentage',
        'RentSales',
        'printBasic',
        'print_prescription',
        'purchase',
        'sales',
        'notEditQnt',
        'expiry_alert',
        'second_note',
        'cost_type'
    ];
}
