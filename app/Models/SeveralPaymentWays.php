<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeveralPaymentWays extends Model
{
    use HasFactory;
    protected $primaryKey = 'SeveralPaymentWaysID';
    protected $table = 'severalpaymentways';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'SeveralPaymentWaysID',
        'SeveralPaymentWaysCode_Ar',
        'SeveralPaymentWaysCode_En',
        'AnalysisNameName_Ar',
        'AnalysisNameName_En',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'UsrUpd'
    ];
}
