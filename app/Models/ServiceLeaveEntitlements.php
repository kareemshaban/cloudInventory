<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLeaveEntitlements extends Model
{
    use HasFactory;
    protected $primaryKey = 'ServiceLeaveEntitlementsID';
    protected $table = 'serviceleaveentitlements';
    public $timestamps = false;
    protected $fillable = [
        'ServiceLeaveEntitlementsID',
        'NameAr',
        'NameEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
