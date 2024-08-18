<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldCatchReceipt extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID';
    protected $table = 'goldcatchreceipt';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'client_id',
        'client_name',
        'client_vat',
        'notes',
        'date',
        'weight',
        'karad'
    ];
}
