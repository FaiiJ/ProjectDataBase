<?php

use App\Http\Controllers\customer_signupController;
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

Route::get('/login_customer', function () {
    return view('login_customer');
});

Route::get('/customer_signup', function () {
    return view('customer_signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login_admin', function () {
    return view('login_admin');
});

Route::get('/customer_signup', function () {
    return view('customer_signup');
});
Route::get('/stud_create', function () {
    return view('stud_create');
});

Route::get('/customer_pdl_snacks', function () {
    return view('customer_pdl_snacks');
});

Route::get('/customer_pdl_bakery', function () {
    return view('customer_pdl_bakery');
});

Route::get('/customer_pdl_drinks', function () {
    return view('customer_pdl_drinks');
});

Route::get('/admin_pdl_drinks', function () {
    return view('admin_pdl_drinks');
});
Route::get('/admin_console', function () {
    return view('admin_console');
});
Route::get('/insertproduct', function () {
    return view('admin_insert');
});
Route::get('/editproduct', function () {
    return view('admin_edit');
});
Route::get('/insert', function () {
    return view('insert');
});




Route::post('/customer_signup', "customer_signupController@index");

Route::get('/customer_pdl_drinks', 'customer_pdl_drinksController@index');
Route::get('/customer_pdl_bakery', 'customer_pdl_bakeryController@index');
Route::get('/customer_pdl_snacks', 'customer_pdl_snacksController@index');

Route::get('/admin_pdl_drinks', 'admin_pdl_drinksController@index');

Route::get('admin_console', 'consoleController@index');
Route::get('/delete/{id}', 'consoleController@destroy');

Route::get('insert','admin_insertController@insertform');
Route::post('create','admin_insertController@insert');
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
