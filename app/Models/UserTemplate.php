<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    use HasFactory;
    protected $primaryKey = 'UserTemplateID';
    protected $table = 'usertemplate';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'UserTemplateID',
        'LoginID',
        'DOCTypeBasicID',
        'STDOCTypeID',
        'DocID',
        'VendorId',
        'StorId',
        'BesadOn',
        'BesadOnDocID',
        'SellerId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
