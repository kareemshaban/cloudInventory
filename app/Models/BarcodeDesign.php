<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarcodeDesign extends Model
{
    use HasFactory;
    protected $primaryKey = 'BarCodeDesign_id';
    protected $table = 'barcodedesign';
    public $timestamps = false;

    protected $fillable = [
        'BarCodeDesign_id',
        'BarCodeDesign_header_id',
        'BarCodeDesign_Field_Name',
        'BarCodeDesign_Field_Text',
        'BarCodeDesign_Width',
        'BarCodeDesign_Height',
        'BarCodeDesign_X',
        'BarCodeDesign_Y',
        'BarCodeDesign_Font',
        'BarCodeDesign_Font_Size',
        'dis'
    ];
}
