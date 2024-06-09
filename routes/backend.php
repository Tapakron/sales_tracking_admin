<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DataMasterController\DropdownMasterController;

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


//todo ล็อคอินใช้งาน
// Route::post('/account/create', [AuthController::class, 'create']);
// Route::post('/backend/admin/sales/create', [SalesController::class, 'create']);
//'middleware' => 'auth',
Route::group(['prefix' => 'backend'], function () {
    //! ล็อคอินใช้งาน
    Route::post('/login', [AuthController::class, 'login']);
    //! ล็อคเอาท์
    Route::post('/logout', [AuthController::class, 'logout']);
    //todo admin
    Route::group(['prefix' => 'admin'], function () {
        // Route::post('/update', [CustomerController::class, 'update']);
        //todo sales
        Route::group(['prefix' => 'sales'], function () {
            Route::post('/create', [SalesController::class, 'create']);
            Route::post('/update', [SalesController::class, 'update']);
            Route::get('/delete', [SalesController::class, 'delete']);
            // Route::get('/fetch', [CustomerController::class, 'fetch']);
            // Route::get('/fetchbyid/{id}', [CustomerController::class, 'fetchById']);
        });
        Route::group(['prefix' => 'customers'], function () {
            // Route::post('/create', [CustomerController::class, 'create']);
            // Route::post('/update', [CustomerController::class, 'update']);
            // Route::get('/delete', [CustomerController::class, 'delete']);
            // Route::get('/fetch', [CustomerController::class, 'fetch']);
            // Route::get('/fetchbyid/{id}', [CustomerController::class, 'fetchById']);
            // Route::get('/recordsales/{id}', [CustomerController::class, 'recordSalesById']);
        });
        Route::group(['prefix' => 'news'], function () {
            // Route::post('/create', [CustomerController::class, 'create']);
            // Route::post('/update', [CustomerController::class, 'update']);
            // Route::post('/search', [CustomerController::class, 'search']);
            // Route::get('/delete', [CustomerController::class, 'delete']);
            // Route::get('/fetch', [CustomerController::class, 'fetch']);
            // Route::get('/fetchbyid/{id}', [CustomerController::class, 'fetchById']);
        });
        Route::group(['prefix' => 'master'], function () {
            // Route::post('/targetsales/create', [CustomerController::class, 'create']);
        });
    });
    //!----------------------------------------------------------------------------------
    Route::group(['middleware' => 'auth', 'prefix' => 'users'], function () {
        Route::group(['prefix' => 'sales'], function () {
            // Route::post('/create', [CustomerController::class, 'create']);
            // Route::post('/update', [CustomerController::class, 'update']);
            // Route::get('/delete', [CustomerController::class, 'delete']);
            // Route::get('/fetch', [CustomerController::class, 'fetch']);
            // Route::get('/fetchbyid/{id}', [CustomerController::class, 'delete']);
        });
        Route::group(['prefix' => 'contacts'], function () {
            // Route::post('/create', [CustomerController::class, 'create']);
            // Route::get('/fetch', [CustomerController::class, 'fetch']);
            // Route::get('/fetchbyid/{id}', [CustomerController::class, 'fetchById']);
        });
        Route::group(['prefix' => 'news'], function () {
            // Route::post('/search', [CustomerController::class, 'search']);
            // Route::get('/fetch', [CustomerController::class, 'fetch']);
            // Route::get('/fetchbyid/{id}', [CustomerController::class, 'fetchById']);
        });
        Route::group(['prefix' => 'payment'], function () {
            // Route::post('/create', [CustomerController::class, 'create']);
        });
    });
});


//'middleware' => 'auth', 
//todo มาสเตอร์
Route::group(['prefix' => 'api',], function () {
    Route::group(['prefix' => 'datacenter'], function () {
        //todo มาสเตอร์ อำเภอ
        Route::get('/amphure/fetch/{id}', [DropdownMasterController::class, 'fetchAmphureById']);
        //todo มาสเตอร์ ตำบล
        Route::get('/tambol/fetch/{id}', [DropdownMasterController::class, 'fetchTambolById']);
        //todo มาสเตอร์ รหัสไปรษณีย์
        // Route::get('/zipcode/fetch/{id}', [DropdownMasterController::class, 'fetchZipcodeById']);
        //todo มาสเตอร์ โปรแกรม
        // Route::get('/program/fetch', [DropdownMasterController::class, 'getTypeWork']);
    });
});
