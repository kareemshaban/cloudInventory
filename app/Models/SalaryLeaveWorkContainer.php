<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryLeaveWorkContainer extends Model
{
    use HasFactory;
    protected $primaryKey = 'SalaryLeaveWorkContainerID';
    protected $table = 'salaryleaveworkcontainer';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SalaryLeaveWorkContainerID',
        'Code',
        'NameAR',
        'NameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
