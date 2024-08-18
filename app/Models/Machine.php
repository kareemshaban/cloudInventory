<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $primaryKey = 'MachineID';
    protected $table = 'machine';
    public $timestamps = false;
    protected $fillable = [
        'MachineID',
        'MachineMacAddress',
        'MachineNO',
        'HallID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
