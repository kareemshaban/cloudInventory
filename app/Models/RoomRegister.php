<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRegister extends Model
{
    use HasFactory;
    protected $primaryKey = 'RoomRegisterID';
    protected $table = 'roomregister';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RoomRegisterID',
        'Code',
        'RegiterationTypeID',
        'RoomTypeID',
        'CheckInOutID',
        'RegiterationDate',
        'PatientID',
        'RoomID',
        'BedID',
        'EntryDate',
        'ExitDate',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
