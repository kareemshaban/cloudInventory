<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocEffectDetails extends Model
{
    use HasFactory;
    protected $primaryKey = 'DocEffiectDetailsID';
    protected $table = 'doceffectdetails';
    public $timestamps = false;

    protected $fillable = [
        'DocEffiectDetailsID',
        'DocEffiectDetailsBillId',
        'DocEffiectDetailsDate',
        'DocEffiectDetailsAmount',
        'DocEffiectDetailsFileID',
        'DocEffiectDetailsType',
        'DocBasicID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
