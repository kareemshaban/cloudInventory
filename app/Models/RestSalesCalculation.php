<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestSalesCalculation extends Model
{
    use HasFactory;

    protected $primaryKey = 'RestSalescalculationID';
    protected $table = 'restsalescalculation';
    public $timestamps = false;
    protected $hidden = ['TimUpd', 'TimIns', 'Dis'];
    protected $fillable = [
        'RestSalescalculationID',
        'NameAR',
        'Amount',
        'SalesBillId',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd',
    ];
}
