<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavigatorPagesContoller;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'checkLogin']);
Route::get('/login', function () {
    $data['pageDetails'] = [
        'page_lv' => '1',
        'page_name_en_1' => 'dashboard',
        'page_name_th_1' => 'แดชบอร์ด',
        'page_url_1' => '/dashboard',
        'page_name_en_2' => '',
        'page_name_th_2' => '',
        'page_url_2' => '',
        'page_name_en_3' => '',
        'page_name_th_3' => '',
        'page_url_3' => '',
    ];
    return view('login')->with($data);
});

Route::group(['middleware' => 'auth'], function () {
    // ! dashboard
    Route::get('/dashboard', [NavigatorPagesContoller::class, 'dashboard']);
    Route::get('/dashboard/projects', [NavigatorPagesContoller::class, 'dashboardProjects']);

    // ! contacts
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/getting/started', [NavigatorPagesContoller::class, 'contactsGettingStarted']);
        Route::get('/view', [NavigatorPagesContoller::class, 'contactsView']);
    });

    // ! customers
    Route::group(['prefix' => 'company'], function () {
        Route::get('/details', [NavigatorPagesContoller::class, 'companyDetails']);
    });

    // ! customers
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/details/{id}', [NavigatorPagesContoller::class, 'customersDetails']);
        Route::get('/add', [NavigatorPagesContoller::class, 'customersAdd']);
        Route::get('/edit/{id}', [NavigatorPagesContoller::class, 'customersEdit']);
        Route::get('/listing', [NavigatorPagesContoller::class, 'customersListing']);
    });

    // ! sales
    Route::group(['prefix' => 'sales'], function () {
        Route::get('/add', [NavigatorPagesContoller::class, 'salesAdd']);
        Route::get('/edit/{id}', [NavigatorPagesContoller::class, 'salesEdit']);
        Route::get('/list', [NavigatorPagesContoller::class, 'salesList']);
        Route::get('/target', [NavigatorPagesContoller::class, 'salesTarget']);
    });

    // ! subscriptions
    // Route::get('/subscriptions/add', [NavigatorPagesContoller::class, 'subscriptionsAdd']);

    // ! invoices
    Route::group(['prefix' => 'invoices'], function () {
        Route::get('/invoices', [NavigatorPagesContoller::class, 'invoices']);
        Route::get('/view', [NavigatorPagesContoller::class, 'invoicesView']);
        Route::post('/create', [NavigatorPagesContoller::class, 'invoicesCreate']);
    });

    // ! projects
    Route::get('/projects', [NavigatorPagesContoller::class, 'projects']);

    // ! support-center
    Route::group(['prefix' => 'news'], function () {
        Route::get('/lists', [NavigatorPagesContoller::class, 'newsLists'])->name('list.news');
        Route::get('/detail/{id}', [NavigatorPagesContoller::class, 'newsdetail']);
    });

    // ! user-management
    Route::group(['prefix' => 'management'], function () {

        Route::get('/users/import', [NavigatorPagesContoller::class, 'managementUsersImport']);
        Route::get('/users/view', [NavigatorPagesContoller::class, 'managementUsersView']);
    });
});
