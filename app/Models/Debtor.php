<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    use HasFactory;
    protected $primaryKey = 'DebtorID';
    protected $table = 'debtor';
    public $timestamps = false;

    protected $fillable = [
        'DebtorID',
        'AccountsTreeID',
        'DOCTypeBasicID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
