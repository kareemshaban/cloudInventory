<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarcodeDesignHeader extends Model
{
    use HasFactory;

    protected $primaryKey = 'BarCodeDesignHeader_id';
    protected $table = 'barcodedesignheader';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];

    protected $fillable = [
        'BarCodeDesignHeader_id',
        'BarCodeDesignHeader_Name',
        'BarCodeDesignHeader_Width',
        'BarCodeDesignHeader_Height',
        'dis'
    ];
}
