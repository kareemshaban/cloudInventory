<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transports extends Model
{
    use HasFactory;
    protected $primaryKey = 'TransportID';
    protected $table = 'transports';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'TransportID',
        'EmployerID',
        'TransportNo',
        'CategorySalary',
        'Date',
        'Total',
        'DocNo',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
