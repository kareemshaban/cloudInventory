<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LtAttachmentType extends Model
{
    use HasFactory;

    protected $primaryKey = 'AttachmentTypeID';
    protected $table = 'ltattachmenttype';
    public $timestamps = false;
    protected $fillable = [
        'AttachmentTypeID',
        'AttachmentTypeCode_Ar',
        'AttachmentTypeCode_En',
        'AttachmentTypeName_Ar',
        'AttachmentTypeName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
