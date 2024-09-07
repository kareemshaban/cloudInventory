<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;
    protected $primaryKey = 'BloodTypeID';
    protected $table = 'bloodtype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'BloodTypeID',
        'BloodTypeAR',
        'BloodTypeEN',
        'BloodTypeCodeAR',
        'BloodTypeCodeEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
