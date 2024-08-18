<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormControl extends Model
{
    use HasFactory;

    protected $primaryKey = 'ControlID';
    protected $table = 'formcontrol';
    public $timestamps = false;
    protected $fillable = [
        'ControlID',
        'FormID',
        'ControlName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
