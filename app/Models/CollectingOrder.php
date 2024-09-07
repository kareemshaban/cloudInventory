<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectingOrder extends Model
{
    use HasFactory;
    protected $primaryKey = 'CollectingOrderID';
    protected $table = 'collectingorder';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CollectingOrderID',
        'CollectingOrderNO',
        'CollectingOrderDate',
        'CollectingOrderTime',
        'DoctorID',
        'PatientID',
        'IsUsed',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
