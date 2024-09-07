<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedType extends Model
{
    use HasFactory;
    protected $primaryKey = 'BedTypeID';
    protected $table = 'bedtype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'BedTypeID',
        'Code',
        'Name_Ar',
        'Name_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
