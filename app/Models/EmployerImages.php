<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerImages extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID';
    protected $table = 'employerimages';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'ID',
        'EmployerID',
        'Description',
        'ItemImage',
        'Status',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
