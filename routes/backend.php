<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DataMasterController\DropdownMasterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TargetSalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::post('/account/create', [AuthController::class, 'create']);
// Route::post('/backend/admin/sales/create', [SalesController::class, 'create']);
//'middleware' => 'auth',
//todo ล็อคอินใช้งาน
Route::post('/backend/login', [AuthController::class, 'login']);
Route::group(['middleware' => 'auth', 'prefix' => 'backend'], function () {
    Route::post('/changepassword', [AuthController::class, 'changePassword']);
    //! ชำระเงิน
    Route::group(['prefix' => 'payment'], function () {
        Route::post('/create', [PaymentController::class, 'create']);
        Route::get('/fetch/img/{id}', [PaymentController::class, 'fetchImgs']);
        Route::get('/fetch/{id}', [PaymentController::class, 'fetchById']);
    });
    //! ล็อคเอาท์
    Route::post('/logout', [AuthController::class, 'logout']);
    //todo admin
    //!---------------------------------------admin-------------------------------------------
    Route::group(['prefix' => 'admin'], function () {
        Route::post('/update_profile', [CompanyController::class, 'updateProfile']);
        Route::post('/update_address', [CompanyController::class, 'updateAddress']);
        //todo sales
        Route::group(['prefix' => 'sales'], function () {
            Route::post('/create', [SalesController::class, 'create']);
            Route::post('/update', [SalesController::class, 'update']);
            Route::get('/delete/{id}', [SalesController::class, 'delete']);
            Route::post('/deleteall', [SalesController::class, 'deleteSelect']);
            Route::get('/fetch/{id}', [SalesController::class, 'fetchById']);
        });
        Route::group(['prefix' => 'customers'], function () {
            Route::post('/create', [CustomerController::class, 'create']);
            Route::post('/update', [CustomerController::class, 'update']);
            Route::get('/delete/{id}', [CustomerController::class, 'delete']);
            Route::get('/lost/{id}', [CustomerController::class, 'lost']);
            Route::get('/fetch/{id}', [CustomerController::class, 'fetchById']);
            // Route::get('/recordsales/{id}', [CustomerController::class, 'recordSalesById']);
        });
        Route::group(['prefix' => 'news'], function () {
            Route::post('/create', [NewsController::class, 'create']);
            Route::post('/update', [NewsController::class, 'update']);
            // Route::post('/search', [CustomerController::class, 'search']);
            Route::get('/delete/{id}', [NewsController::class, 'delete']);
        });

        //! เป้ายอดขาย
        Route::group(['prefix' => 'targetsales'], function () {
            Route::post('/create', [TargetSalesController::class, 'create']);
            Route::get('/delete/{id}', [TargetSalesController::class, 'fetch']);
        });
    });
});


//'middleware' => 'auth', 
//todo มาสเตอร์
Route::group(['prefix' => 'api',], function () {
    Route::group(['prefix' => 'datamaster'], function () {
        //todo มาสเตอร์ อำเภอ
        Route::get('/amphure/fetch/{id}', [DropdownMasterController::class, 'fetchAmphureById']);
        //todo มาสเตอร์ ตำบล
        Route::get('/tambol/fetch/{id}', [DropdownMasterController::class, 'fetchTambolById']);
        //todo มาสเตอร์ รหัสไปรษณีย์
        // Route::get('/zipcode/fetch/{id}', [DropdownMasterController::class, 'fetchZipcodeById']);
        //todo มาสเตอร์ โปรแกรม
        // Route::get('/program/fetch', [DropdownMasterController::class, 'getTypeWork']);
    });
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'targetsales'], function () {
            Route::get('/fetch', [TargetSalesController::class, 'fetch']);
        });
        Route::group(['prefix' => 'sales'], function () {
            Route::get('/fetch', [SalesController::class, 'fetch']);
        });
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/fetch', [CustomerController::class, 'fetch']);
        });
        Route::group(['prefix' => 'news'], function () {
            Route::post('/fetch', [NewsController::class, 'fetch']);
            Route::get('/search', [NewsController::class, 'search'])->name('search.news');
            Route::get('/fetch/{id}', [NewsController::class, 'fetchById']);
        });
    });
});
