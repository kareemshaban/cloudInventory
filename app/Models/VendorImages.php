<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorImages extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'vendorimages';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'VendorID',
        'Description',
        'ItemImage',
        'FileIcon',
        'FileName',
        'DocTypeID',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
