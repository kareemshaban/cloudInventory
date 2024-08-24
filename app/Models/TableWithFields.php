<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableWithFields extends Model
{
    use HasFactory;
    protected $primaryKey = 'FeildID';
    protected $table = 'tableswithfeilds';
    public $timestamps = false;
    protected $fillable = [
        'FeildID',
        'column_name',
        'data_type',
        'character_maximum_length',
        'table_name',
        'ordinal_position',
        'is_nullable'
    ];
}
