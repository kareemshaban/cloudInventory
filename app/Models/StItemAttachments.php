<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StItemAttachments extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'stitemattachments';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'ItemID',
        'AttachmentID',
        'AttachmentTypeID',
        'UsrIns',
        'TimIns',
    ];
}
