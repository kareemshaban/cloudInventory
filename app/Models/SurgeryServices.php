<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryServices extends Model
{
    use HasFactory;
    protected $primaryKey = 'SurgeryServiceID';
    protected $table = 'surgeryservices';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SurgeryServiceID',
        'ServiceID',
        'SurgeryID',
        'Quantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
