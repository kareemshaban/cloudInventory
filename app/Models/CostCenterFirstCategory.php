<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenterFirstCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'CostcenterFirstCatogryID';
    protected $table = 'costcenterfirstcatogry';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'CostcenterFirstCatogryID',
        'CostcenterFirstCatogryNameAr',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
