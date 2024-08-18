<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankFile extends Model
{
    use HasFactory;
    protected $primaryKey = 'BankFileID';
    protected $table = 'bankfile';
    public $timestamps = false;

    protected $fillable = [
        'BankFileID',
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
        'TimUpd'
    ];
}
