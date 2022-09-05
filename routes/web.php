<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', 'CategoryController')->names('categories');
Route::resource('cities', 'CityController')->names('cities');
Route::resource('clients', 'ClientController')->names('clients');
Route::resource('products', 'ProductController')->names('products');
Route::resource('providers', 'ProviderController')->names('providers');
Route::resource('purchases', 'PurchaseController')->names('purchases')->except(['update', 'destroy', 'edit']);
Route::resource('sales', 'SaleController')->names('sales')->except(['update', 'destroy', 'edit']);
Route::get('purchases/pdf/{purchase}', 'PurchaseController@pdf')->name('purchases.pdf');
Route::get('sales/pdf/{sale}', 'SaleController@pdf')->name('sales.pdf');
Route::get('sales/print/{sale}', 'SaleController@print')->name('sales.print');
Route::resource('business', 'BusinessController')->names('business')->only(['index', 'update']);
Route::resource('printers', 'PrinterController')->names('printers')->only(['index', 'update']);
Route::get('purchases/upload/{purchase}', 'PurchaseController@upload')->name('upload.purchases');
Route::get('change_status/products/{products}', 'ProductController@change_status')->name('upload.status.products');
Route::get('change_status/purchases/{purchase}', 'PurchaseController@change_status')->name('upload.status.purchases');
Route::get('change_status/sales/{sales}', 'SaleController@change_status')->name('upload.status.sales');

Route::get('sales/reports_day', 'ReportController@reports_day')->name('reports.day');
Route::get('sales/reports_date', 'ReportController@reports_date')->name('reports.date');
Route::post('sales/report_results', 'ReportController@report_results')->name('report.results');

Route::resource('users', 'UserController')->names('users');
Route::resource('roles', 'RoleController')->names('roles');

Route::get('/prueba', function () {
    return view('prueba');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
