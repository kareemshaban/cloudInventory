<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $primaryKey = 'YearID';
    protected $table = 'year';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'YearID',
        'YearName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
