<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $primaryKey = 'ProjectId';
    protected $table = 'project';
    public $timestamps = false;
    protected $fillable = [
        'ProjectId',
        'ProjectName',
        'Description',
        'HomeNo',
        'HouseNo',
        'Installment',
        'period',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
