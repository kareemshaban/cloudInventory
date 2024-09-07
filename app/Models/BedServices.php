<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedServices extends Model
{
    use HasFactory;

    protected $primaryKey = 'BedServiceID';
    protected $table = 'bedservices';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'BedServiceID',
        'ServiceID',
        'BedID',
        'Quantity',
        'Quantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
