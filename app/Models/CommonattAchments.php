<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonattAchments extends Model
{
    use HasFactory;
    protected $primaryKey = 'AttachmentID';
    protected $table = 'commonattachments';
    public $timestamps = false;

    protected $fillable = [
        'AttachmentID',
        'AttachmentFile',
    ];
}
