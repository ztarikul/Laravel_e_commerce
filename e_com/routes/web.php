<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/checkout', function () {
//     return view('checkout');
// });

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/covid19', [HomeController::class, 'covid_form'])->name('covid.form');
Route::post('/covid19_tracker', [HomeController::class, 'covid_tracker'])->name('covid.tracker');



Route::resource('customer', CustomerController::class);
Route::get('/customer_login','CustomerController@login')->name('customer.login');
Route::post('/customer_loginAuthenticate','CustomerController@customer_loginAuthenticate')->name('customer.loginAuthenticate');
Route::get('/customer_registration','CustomerController@registration')->name('customer.registration');
Route::post('/customerRegistration','CustomerController@customerRegistration')->name('customer.customerRegistration');
Route::get('/customer_logout','CustomerController@customer_logout')->name('customer.logout');


Route::resource('post', PostController::class);
Route::resource('comment',CommentController::class);




