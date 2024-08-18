<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegator extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'delegator';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'code',
        'name'
    ];
}
