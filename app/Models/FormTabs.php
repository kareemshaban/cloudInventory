<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTabs extends Model
{
    use HasFactory;

    protected $primaryKey = 'FormTabId';
    protected $table = 'formtabs';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'FormTabId',
        'FormTabName',
        'FormTabNameAr',
        'FormTabNameEN',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
