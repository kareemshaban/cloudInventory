<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallmentType extends Model
{
    use HasFactory;

    protected $primaryKey = 'InstallmentTypeID';
    protected $table = 'installmenttype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'InstallmentTypeID',
        'InstallmentName',
        'InstallmentRecent',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
