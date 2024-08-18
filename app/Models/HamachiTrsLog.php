<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HamachiTrsLog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'hamachi_trs_log';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'branch_id',
        'file_path',
        'status',
        'action_type'
    ];
}
