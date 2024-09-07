<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotRegisteredCustomers extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'not_registered_customers';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'id',
        'name',
        'address',
        'phone',
        'vat_no'
    ];
}
