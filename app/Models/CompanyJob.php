<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJob extends Model
{
    use HasFactory;

    protected $primaryKey = 'CompanyJobID';
    protected $table = 'companyjob';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CompanyJobID',
        'CompanyJobCode_Ar',
        'CompanyJobCode_En',
        'CompanyJobName_Ar',
        'CompanyJobName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
