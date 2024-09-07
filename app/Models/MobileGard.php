<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileGard extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'mobile_gard';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'id',
        'product_code',
        'quantity',
        'doc_id'
    ];
}
