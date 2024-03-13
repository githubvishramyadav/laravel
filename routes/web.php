<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
// use App\Http\Controllres\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/d', function () {
//     return view('welcome');
// });

// Route::get('/demo', function(){
//     echo "Hello world";
// });

// Route::post('/test', function(){
//     echo "Testing an application";
// });

// Route::any('/test', function()
// {
//     echo "Testing Application";
// });


// Route::put('user/{id}', function(){
//     echo ""
// });

// Route::patch();

// Route::delete('user/{id}', function(){
//     echo
// });

// Route::get('/demopage', function(){
//     return view('demo');
// });


// pass user name in url

// Route::get('/demo/{name}/{id?}', function($name, $id =null){
//     echo $name . " ";
//     echo $id;
// });

// send the data trough views

// Route::get('/demo/{name}/{id?}', function($name, $id = null){
//     $data = compact('name', 'id');
//     // print_r($data);
//     return view('demo')->with($data);
// });


// Route::get('/', function(){
//     return view('home');
// });

// Route::get('/{name?}', function($name = null){
//     $data = compact('name');
//     return view('home')->with($data);
// });

// Route::get('/{name?}', function($name = null){
//     $demo = "<h2>Hello guest how are you!</h2>";
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });

// Route::get('/', function () {
//     return view('home1');
// });
// Route::get('/about', function () {
//     return view('about');
// });

// Basic Controller 
// Route::get('/', [DemoController::class, 'index']);
// // Route::get('/about',[DemoController::class, 'about']);
// Route::get('/about', 'App\Http\Controllers\DemoController@about');


// Route::get('/courses', SingleActionController::class);

// Route::resource('photo', PhotoController::class);

// Registration
// Route::get('/register', [RegistrationController::class, 'index']);
// Route::post('/register', [RegistrationController::class, 'register']);

// Route::get('/customer', function(){
//     $customer = Customer::all();
//     echo "<pre>";
//     print_r($customer->toArray());
// });



// Insert Query in database

Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']); // Store user in database

Route::get('/customer/create', [CustomerController::class, 'create']); // create user
Route::get('/customer/view', [CustomerController::class, 'view']); // view the table on page