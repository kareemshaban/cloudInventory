<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLabDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'ServicesLabDetailsID';
    protected $table = 'serviceslabdetails';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'ServicesLabDetailsID',
        'ServiceID',
        'ServiceLabName',
        'Normal',
        'unit',
        'SexTypeId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
