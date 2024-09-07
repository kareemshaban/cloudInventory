<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsSettings extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'whatssettings';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'id',
        'send_client_pdf',
        'send_company',
        'send_to_clients',
        'accessToken',
        'instanceId',
        'welcomeMessage',
        'max_count',
        'current_count',
    ];
}
