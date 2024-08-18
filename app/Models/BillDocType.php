<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDocType extends Model
{
    use HasFactory;

    protected $primaryKey = 'BillDocTypeID';
    protected $table = 'billdoctype';
    public $timestamps = false;

    protected $fillable = [
        'BillDocTypeID',
        'DocType',
        'DocTypeBasic',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
