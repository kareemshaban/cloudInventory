<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatingLeaveMethod extends Model
{
    use HasFactory;

    protected $primaryKey = 'CalculatingLeaveMethodID';
    protected $table = 'calculatingleavemethod';
    public $timestamps = false;

    protected $fillable = [
        'CalculatingLeaveMethodID',
        'NameAr',
        'NameEn',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
