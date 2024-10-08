<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrnsLogs extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'trns_logs';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'id',
        'file_name',
        'branch_id',
        'date',
        'user_id'
    ];
}
