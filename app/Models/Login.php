<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $primaryKey = 'LoginID';
    protected $table = 'login';
    public $timestamps = false;
    protected $fillable = [
        'LoginID',
        'UserName',
        'Password',
        'IsEmployer',
        'EmployerID',
        'CompanyJobID',
        'LoginCode',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
