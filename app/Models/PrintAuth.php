<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintAuth extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrintAuthID';
    protected $table = 'printauth';
    public $timestamps = false;
    protected $fillable = [
        'PrintAuthID',
        'DOCTypeBasicID',
        'BillId',
        'LoginID',
        'NoOfPrint',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
