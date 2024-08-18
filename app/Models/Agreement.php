<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $primaryKey = 'AgreeID';
    protected $table = 'agreement';
    public $timestamps = false;
    protected $fillable = [
        'AgreeID',
        'AgreementName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
