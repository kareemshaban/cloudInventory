<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $primaryKey = 'ShiftNO';
    protected $table = 'shift';
    public $timestamps = false;
    protected $fillable = [
        'ShiftNO',
        'UserID',
        'TimeStart',
        'TimeEnd',
        'MoneyRecipient',
        'MoneyLeft',
        'approved',

    ];
}
