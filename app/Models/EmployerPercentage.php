<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerPercentage extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'employer_percentage';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'id',
        'employer_id',
        'item_id',
        'percentage'
    ];
}
