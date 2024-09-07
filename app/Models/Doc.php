<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    protected $primaryKey = 'DocID';
    protected $table = 'doc';
    public $timestamps = false;
 protected $hidden = ['TimUpd', 'TimIns', 'Dis'];



    protected $fillable = [
        'DocID',
        'DocTypeBasicId',
        'FixedPart',
        'DBCode',
        'DocNameEN',
        'DocNameAR',
        'UserGroup',
        'User',
        'Stock',
        'onlySystemDoc',
        'IsAutomaticSerial',
        'NnoOfDigits',
        'FirstNo',
        'LastNo',
        'migrateMethod',
        'printForm',
        'printWithSave',
        'SeveralPaymentWaysID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'

    ];
}
