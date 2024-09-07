<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'SurgeryItemID';
    protected $table = 'surgeryitem';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SurgeryItemID',
        'ItemId',
        'SurgeryID',
        'ItemUnit',
        'ItemQuantity',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
