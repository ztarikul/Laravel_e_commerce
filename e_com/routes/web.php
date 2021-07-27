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
Route::post('/customer_login','CustomerController@customer_login')->name('customer.login');
Route::get('/customer_registration','CustomerController@registration')->name('customer.registration');




