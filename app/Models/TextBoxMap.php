<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextBoxMap extends Model
{
    use HasFactory;
    protected $primaryKey = 'TextBoxMapID';
    protected $table = 'textboxmap';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'TextBoxMapID',
        'TextBoxName',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
