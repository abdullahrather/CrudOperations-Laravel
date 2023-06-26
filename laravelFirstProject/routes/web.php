<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
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

Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']);

// Route::get('/customer', function () {
//     $customers = Customer::all();
//     echo '<pre>';
//     print_r($customers->toArray());
// });

Route::get('/register', [RegistrationController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/', [DemoController::class, 'index']);

Route::get('/about', [DemoController::class, 'about']);

Route::get('/courses', SingleActionController::class);

Route::resource('/resource', ResourceController::class);


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/homee', function () {
//     return view('homee');
// });

// Route::get('/course', function () {
//     return view('course');
// });

// Route::get('/home/{name?}', function ($name = null) {
//     $temp = "<h2>data with html elements</h2>";
//     $data = compact('name', 'temp');
//     return view('home')->with($data);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo/{name}/{id?}', function ($name, $id=null) {
// $variable1 = compact('name','id');
//  return view('demo')->with($variable1);
// });

// Route::any('/hometest', function () {
//     echo "Home Test";
// });

// Route::put('users/id', function($id) {

// });

// Route::patch();

// Route::delete();
