<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeverInfo extends Model
{
    use HasFactory;
    protected $primaryKey = 'ServerInfoID';
    protected $table = 'serverinfo';
    public $timestamps = false;
    protected $fillable = [
        'ServerInfoID',
        'Mac1',
        'processor',
        'MotherBoard',
        'SerialNO',
        'approved',
        'CompanyName',
        'Triger',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
