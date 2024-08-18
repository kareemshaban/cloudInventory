<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditor extends Model
{
    use HasFactory;

    protected $primaryKey = 'Creditor_id';
    protected $table = 'creditor';
    public $timestamps = false;

    protected $fillable = [
        'Creditor_id',
        'AccountsTreeID',
        'DOCTypeID',
        'AccountNatural',
        'textBox',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
