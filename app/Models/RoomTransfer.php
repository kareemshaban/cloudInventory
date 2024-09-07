<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTransfer extends Model
{
    use HasFactory;
    protected $primaryKey = 'RoomTransferID';
    protected $table = 'roomtransfer';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RoomTransferID',
        'Code',
        'RegiterationTypeID',
        'RoomTypeID',
        'CheckInOutID',
        'TransferDate',
        'PatientID',
        'FromRoomID',
        'ToRoomID',
        'FromBedID',
        'ToBedID',
        'ExitDate',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
    ];
}
