<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/d', function () {
    return view('welcome');
});

Route::get('/demo', function(){
    echo "Hello world";
});

Route::post('/test', function(){
    echo "Testing an application";
});

Route::any('/test', function()
{
    echo "Testing Application";
});


// Route::put('user/{id}', function(){
//     echo ""
// });

// Route::patch();

// Route::delete('user/{id}', function(){
//     echo
// });

Route::get('/demopage', function(){
    return view('demo');
});


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

Route::get('/', function () {
    return view('home1');
});
Route::get('/about', function () {
    return view('about');
});