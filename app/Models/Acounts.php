<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acounts extends Model
{
    use HasFactory;
    protected $primaryKey = 'AccountID';
    protected $table = 'acounts';
    public $timestamps = false;

    protected $fillable = [
        'AccountID',
        'AccountNameAr',
        'AccountNameEN',
        'AccountNo',
        'Amount',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
