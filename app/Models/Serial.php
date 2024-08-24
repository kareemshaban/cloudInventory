<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    use HasFactory;
    protected $primaryKey = 'SerialID';
    protected $table = 'serial';
    public $timestamps = false;
    protected $fillable = [
        'SerialID',
        'SerialNO',
        'Approved'
    ];
}
