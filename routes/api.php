<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//////////////////////////////////////////////////POST REQUESTS///////////////////////////////////////////////////////////////////////

Route::post('/sync-up/LTStock', [App\Http\Controllers\LtStockController::class, 'upload'])->name('sync-up-LTStock');
Route::post('/sync-up/DocType', [App\Http\Controllers\DocTypeController::class, 'upload'])->name('sync-up-DocType');
Route::post('/sync-up/Doc', [App\Http\Controllers\DocController::class, 'upload'])->name('sync-up-Doc');
Route::post('/sync-up/Vendor', [App\Http\Controllers\VendorController::class, 'upload'])->name('sync-up-Vendor');
Route::post('/sync-up/CompanyInformation', [App\Http\Controllers\CompanyInformationController::class, 'upload'])->name('sync-up/CompanyInformation');
Route::post('/sync-up/Employer', [App\Http\Controllers\EmployerController::class, 'upload'])->name('sync-up/Employer');
Route::post('/sync-up/CatchRecipit', [App\Http\Controllers\CatchReceiptController::class, 'upload'])->name('sync-up/CatchRecipit');
Route::post('/sync-up/salesBill', [App\Http\Controllers\SalesBillController::class, 'upload'])->name('sync-up/salesBill');
Route::post('/sync-up/stItems', [App\Http\Controllers\StItemsController::class, 'upload'])->name('sync-up/stItems');
Route::post('/sync-up/STTransactionStockIn', [App\Http\Controllers\StTransactionStockInController::class, 'upload'])->name('sync-up/STTransactionStockIn');
Route::post('/sync-up/STTransactionStockOut ', [App\Http\Controllers\StTransactionStockOutController::class, 'upload'])->name('sync-up/STTransactionStockOut');
Route::post('/sync-up/STTransactionStockTransfer ', [App\Http\Controllers\StTransactionStockTransferController::class, 'upload'])->name('sync-up/STTransactionStockTransfer');
Route::post('/sync-up/SalesQuotationBill', [App\Http\Controllers\SalesQuotationBillController::class, 'upload'])->name('sync-up/SalesQuotationBill');
Route::post('/sync-up/SalesOrderBill', [App\Http\Controllers\SalesOrderBillController::class, 'upload'])->name('sync-up/SalesOrderBill');
Route::post('/sync-up/SalesReturnBill', [App\Http\Controllers\SalesReturnBillController::class, 'upload'])->name('sync-up/SalesReturnBill');
Route::post('/sync-up/PurchaseBill', [App\Http\Controllers\PurchaseBillController::class, 'upload'])->name('sync-up/PurchaseBill');
Route::post('/sync-up/Exchange', [App\Http\Controllers\ExchangeController::class, 'upload'])->name('sync-up/Exchange');
Route::post('/sync-up/Expenses', [App\Http\Controllers\ExpensesController::class, 'upload'])->name('sync-up/Expenses');
Route::post('/sync-up/DailyEntry', [App\Http\Controllers\DailyEntryController::class, 'upload'])->name('sync-up/DailyEntry');
Route::post('/sync-up/DailyEntryIntial', [App\Http\Controllers\DailyEntryIntialController::class, 'upload'])->name('sync-up/DailyEntryIntial');


//////////////////////////////////////////////////GET REQUESTS///////////////////////////////////////////////////////////////////////

Route::get('/sync-down/DocType', [App\Http\Controllers\DocTypeController::class, 'download'])->name('sync-down-DocType');
Route::get('/sync-down/Doc', [App\Http\Controllers\DocController::class, 'download'])->name('sync-down-Doc');
Route::get('/sync-down/Vendor', [App\Http\Controllers\VendorController::class, 'download'])->name('sync-down-Vendor');
Route::get('/sync-down/CompanyInformation', [App\Http\Controllers\CompanyInformationController::class, 'download'])->name('sync-down/CompanyInformation');
Route::get('/sync-down/Employer', [App\Http\Controllers\EmployerController::class, 'download'])->name('sync-down/Employer');
Route::get('/sync-down/CatchRecipit', [App\Http\Controllers\CatchReceiptController::class, 'download'])->name('sync-down/CatchRecipit');
Route::get('/sync-down/salesBill', [App\Http\Controllers\SalesBillController::class, 'download'])->name('sync-down/salesBill');
Route::get('/sync-down/stItems', [App\Http\Controllers\StItemsController::class, 'download'])->name('sync-down/stItems');
Route::get('/sync-down/STTransactionStockIn ', [App\Http\Controllers\StTransactionStockInController::class, 'download'])->name('sync-down/STTransactionStockIn');
Route::get('/sync-down/STTransactionStockOut ', [App\Http\Controllers\StTransactionStockInController::class, 'download'])->name('sync-down/STTransactionStockOut');
Route::get('/sync-down/STTransactionStockTransfer ', [App\Http\Controllers\StTransactionStockTransferController::class, 'download'])->name('sync-down/STTransactionStockTransfer');
Route::get('/sync-down/SalesQuotationBill', [App\Http\Controllers\SalesQuotationBillController::class, 'download'])->name('sync-down/SalesQuotationBill');
Route::get('/sync-down/SalesOrderBill', [App\Http\Controllers\SalesOrderBillController::class, 'download'])->name('sync-down/SalesOrderBill');
Route::get('/sync-down/SalesReturnBill', [App\Http\Controllers\SalesReturnBillController::class, 'download'])->name('sync-down/SalesReturnBill');
Route::get('/sync-down/PurchaseBill', [App\Http\Controllers\PurchaseBillController::class, 'download'])->name('sync-down/PurchaseBill');
Route::get('/sync-down/Exchange', [App\Http\Controllers\ExchangeController::class, 'download'])->name('sync-down/Exchange');
Route::get('/sync-down/Expenses', [App\Http\Controllers\ExpensesController::class, 'download'])->name('sync-down/Expenses');
Route::get('/sync-down/DailyEntry', [App\Http\Controllers\DailyEntryController::class, 'download'])->name('sync-down/DailyEntry');
Route::get('/sync-down/DailyEntryIntial', [App\Http\Controllers\DailyEntryIntialController::class, 'download'])->name('sync-down/DailyEntryIntial');



// STTransactionStockIn - Details name in main object( salesBillDetails)   done
// STTransactionStockOut - Details name in main object( salesBillDetails) done
// STTransactionStockTransfer - Details name in main object( salesBillDetails) done
// -------------------------------------------------
// SalesQuotationBill - Details name in main object( orderDetails) done
// SalesOrderBill - Details name in main object( orderDetails) done
// SalesReturnBill - Details name in main object( salesReturnBillDetails) done
// ---------------------------------------------------
// PurchaseBill - Details name in main object (billDetails) done
// ----------------------------------------------------
// Exchange   done
// Expenses done
// ----------------------------------------------------
// DailyEntry - Details name in main object (details)   done
// DailyEntryIntial - Details name in main object(details done
