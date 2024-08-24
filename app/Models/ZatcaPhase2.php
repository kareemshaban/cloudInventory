<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZatcaPhase2 extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'zatcaphase2';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'NacountrymeAr',
        'city',
        'region',
        'street',
        'postal_code',
        'building_no',
        'addiotional_no',
        'token',
        'secret',
        'issuer',
        'sn',
        'private_key',
        'public_key',
        'signature'
    ];
}
