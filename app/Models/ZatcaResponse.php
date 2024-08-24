<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZatcaResponse extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'zatcaresponse';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'invoice_no',
        'hash',
        'invoice',
        'QR',
        'zatcaRequest',
        'zatcaRsponse'
    ];
}
