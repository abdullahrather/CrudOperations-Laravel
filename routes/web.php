<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PortfolioController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\GroupController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);

Route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('user_name', 'Abdullah Rather');
    $request->session()->put('user_id', '12345');
    $request->session()->put('user_email', "abd@xyz.com");
    session()->flash('status', 'Active');
    return redirect('get-all-session');
});

Route::get('destroy-session', function () {
    session()->forget(['user_name', 'user_id']);
    // $request->session()->forget('user_id');
    return redirect('get-all-session');
});

// Route::get('/', function () {
//     return view('index');
// });

Route::group(['prefix' => '/customer'], function () {

    Route::get('view', [CustomerController::class, 'view'])->name('customer.view');;
    Route::get('/', [CustomerController::class, 'index'])->name('customer.create');
    Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('forceDelete/{id}', [CustomerController::class, 'force_delete'])->name('customer.force.delete');

    Route::get('restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
    Route::get('trash', [customerController::class, 'trash'])->name('customer.trash');;
    Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::post('/', [CustomerController::class, 'store']);

    // Route::get('/customer', function () {
    //     $customers = Customer::all();
    //     echo '<pre>';
    //     print_r($customers->toArray());
    // });
});

Route::group(['prefix' => '/group'], function () {

    Route::get('view', [GroupController::class, 'view'])->name('group.view');;
    Route::get('/', [GroupController::class, 'index'])->name('group.create');
    Route::get('delete/{grp_id}', [GroupController::class, 'delete'])->name('group.delete');
    Route::get('forceDelete/{grp_id}', [GroupController::class, 'force_delete'])->name('group.force.delete');

    Route::get('restore/{grp_id}', [GroupController::class, 'restore'])->name('group.restore');
    Route::get('trash', [GroupController::class, 'trash'])->name('group.trash');;
    Route::get('edit/{grp_id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::post('update/{grp_id}', [GroupController::class, 'update'])->name('group.update');
    Route::post('/', [GroupController::class, 'store']);

    // Route::get('/customer', function () {
    //     $customers = Customer::all();
    //     echo '<pre>';
    //     print_r($customers->toArray());
    // });
});



Route::get('/register', [RegistrationController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'register']);

// Route::get('/', [DemoController::class, 'index']);

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
