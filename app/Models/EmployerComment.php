<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerComment extends Model
{
    use HasFactory;

    protected $primaryKey = 'EmployerCommentID';
    protected $table = 'employercomment';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'EmployerCommentID',
        'EmployerID',
        'Comment',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
