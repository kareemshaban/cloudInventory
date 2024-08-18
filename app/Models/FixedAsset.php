<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAsset extends Model
{
    use HasFactory;
    protected $primaryKey = 'FixedAssetID';
    protected $table = 'fixedasset';
    public $timestamps = false;
    protected $fillable = [
        'FixedAssetID',
        'Code',
        'NameAR',
        'NameEN',
        'AssetTypeID',
        'IsAssetStatus',
        'IsFirstCatogry',
        'FirstCatogry',
        'IsSecondCatogry',
        'SecondCatogry',
        'IsThirdCatogry',
        'ThirdCatogry',
        'StockID',
        'IsAssetInformation',
        'Brand',
        'ColorID',
        'BarCode',
        'Serial',
        'OtherCode',
        'PlateNumber',
        'ChaseNumber',
        'IsAssetSpecification',
        'CityID',
        'DeliveryDoc',
        'InsurancePolicy',
        'InsuranceEndDate',
        'InsuranceCondition',
        'GuaranteeCertificate',
        'GuaranteeEndDate',
        'IsAssetMeasurAble',
        'Weight',
        'Width',
        'Height',
        'Length',
        'Area',
        'Volume',
        'Strength',
        'Capacity',
        'IsAssetDetails',
        'AssetAcountID',
        'DepreciationAccountID',
        'ConsumptionAccountID',
        'DepreciationStartDate',
        'AssetProductionLife',
        'ScrapAssetValue',
        'PremiumDepreciationValue',
        'DepreciationEndDate',
        'installmentsNumber',
        'CurrentAmountValue',
        'StockInDoc',
        'DocType',
        'DocDate',
        'AssetValue',
        'VendorID',
        'EmployerID',
        'HasProduction',
        'LostTimeAccountID',
        'WorkRate',
        'WorkMAx',
        'AverageCost',
        'Description',
        'Dis',
        'UsrIns',
        'TimIns',
        'UsrUpd',
        'TimUpd'
    ];
}
