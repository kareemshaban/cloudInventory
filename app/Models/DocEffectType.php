<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocEffectType extends Model
{
    use HasFactory;
    protected $primaryKey = 'DocEffectTYPEID';
    protected $table = 'doceffecttype';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'DocEffectTYPEID',
        'DocEffectTYPECode_Ar',
        'DocEffectTYPECode_En',
        'DocEffectTYPEName_Ar',
        'DocEffectTYPEName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
