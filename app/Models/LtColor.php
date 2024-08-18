<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtColor extends Model
{
    use HasFactory;
    protected $primaryKey = 'ColorID';
    protected $table = 'ltcolor';
    public $timestamps = false;
    protected $fillable = [
        'ColorID',
        'ColorCode_Ar',
        'ColorCode_En',
        'ColorName_Ar',
        'ColorName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
