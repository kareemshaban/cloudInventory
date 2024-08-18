<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtWeight extends Model
{
    use HasFactory;

    protected $primaryKey = 'WeightID';
    protected $table = 'ltweight';
    public $timestamps = false;
    protected $fillable = [
        'WeightID',
        'WeightCode_Ar',
        'WeightCode_En',
        'WeightName_Ar',
        'WeightName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
