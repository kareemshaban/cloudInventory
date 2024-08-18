<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionComment extends Model
{
    use HasFactory;
    protected $primaryKey = 'PrescriptionCommentID';
    protected $table = 'prescriptioncomment';
    public $timestamps = false;
    protected $fillable = [
        'PrescriptionCommentID',
        'PrescriptionID',
        'Comment',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
