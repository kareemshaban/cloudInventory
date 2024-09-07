<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtSize extends Model
{
    use HasFactory;
    protected $primaryKey = 'SizeID';
    protected $table = 'ltsize';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SizeID',
        'SizeCode_Ar',
        'SizeCode_En',
        'SizeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
