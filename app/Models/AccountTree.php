<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTree extends Model
{
    use HasFactory;
    protected $primaryKey = 'AccountTreeId';
    protected $table = 'accounttree';
    public $timestamps = false;

    protected $fillable = [
        'AccountTreeId',
        'AccountParentId',
        'AccontNameAR',
        'AccontNameEN',
        'AccontNameCodeAr',
        'AccontNameCodeEn',
        'AccountLevel',
        'AccountNatural',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
