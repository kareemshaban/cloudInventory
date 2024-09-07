<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocEffect extends Model
{
    use HasFactory;

    protected $primaryKey = 'DocEffectID';
    protected $table = 'doceffect';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DocEffectID',
        'DocEffectDocID',
        'DocEffectTYPE',
        'DocEffectFileID',
        'DocEffectFileID1',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
