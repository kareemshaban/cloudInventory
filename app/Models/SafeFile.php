<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafeFile extends Model
{
    use HasFactory;
    protected $primaryKey = 'SafekFileID';
    protected $table = 'safefile';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SafekFileID',
        'CodeAR',
        'NameAR',
        'NameEN',
        'NameFullAR',
        'NameFullEN',
        'AccountsTreeId',
        'User',
        'UserGroup',
        'Stock',
        'InitialBalance',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
