<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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






// //good api login
// Route::get('/log4login', function () {

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'X-Parse-Application-Id' => 'faefaVxc667rBCJfBWerLVgwbN8ymX1S9CkceSjh',
//         'X-Parse-REST-API-Key' => 'T0Ag23ExRe6UtCQb9KtD7mPFMjtatgWxhUwyZZRI',
//         'X-Parse-Revocable-Session' => '1',

//     ])->get('https://parseapi.back4app.com/login', [
//         'username' => 'Admin',
//         'password' => 'ssss90384593jfsdfkGERTAW21gjalss',
//     ]);

//     return $response['sessionToken'] ;
//    // return view('httest');
// });

// // good   singup
// Route::get('/log4signup', function () {

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'X-Parse-Application-Id' => 'faefaVxc667rBCJfBWerLVgwbN8ymX1S9CkceSjh',
//         'X-Parse-REST-API-Key' => 'T0Ag23ExRe6UtCQb9KtD7mPFMjtatgWxhUwyZZRI',
//         'X-Parse-Revocable-Session' => '1',
//         'Content-Type' => 'application/json',

//     ])->post('https://parseapi.back4app.com/users', [
//         'username' => 'testapi',
//         'email' => 'testapi@h.com',
//         'displayName' => 'testapi alsehli',
//         'password' => 'sexdexofgogofgopfdferer',
//     ]);

//     return $response ;
//    // return view('httest');
// });


// // good   up daut
// Route::get('/updataapi', function () {

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'X-Parse-Application-Id' => 'faefaVxc667rBCJfBWerLVgwbN8ymX1S9CkceSjh',
//         'X-Parse-REST-API-Key' => 'T0Ag23ExRe6UtCQb9KtD7mPFMjtatgWxhUwyZZRI',
//         'Content-Type' => 'application/json',

//     ])->put('https://parseapi.back4app.com/classes/task/XRFKELvALX', [
//         'title' => 'xx',
//         'content' => 'zz',

//     ]);

//     return $response ;
//    // return view('httest');
// });


// // good   send data
// Route::get('/sendapi', function () {

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'X-Parse-Application-Id' => 'faefaVxc667rBCJfBWerLVgwbN8ymX1S9CkceSjh',
//         'X-Parse-REST-API-Key' => 'T0Ag23ExRe6UtCQb9KtD7mPFMjtatgWxhUwyZZRI',
//         'Content-Type' => 'application/json',

//     ])->post('https://parseapi.back4app.com/classes/task', [
//         'title' => 'A string A string',
//         'content' => 'string string',

//     ]);

//     return $response ;
//    // return view('httest');
// });


// // good   read where data
// Route::get('/readwhereapi', function () {

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'X-Parse-Application-Id' => 'faefaVxc667rBCJfBWerLVgwbN8ymX1S9CkceSjh',
//         'X-Parse-REST-API-Key' => 'T0Ag23ExRe6UtCQb9KtD7mPFMjtatgWxhUwyZZRI',

//     ])->get('https://parseapi.back4app.com/classes/task',[
//         'where' => ['content' =>"vvvvvvvvvvvvvvvvvvvvvv"]
//     ]);

//     return $response ;
//    // return view('httest');
// });


// // good   read data
// Route::get('/readapi', function () {

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'X-Parse-Application-Id' => 'faefaVxc667rBCJfBWerLVgwbN8ymX1S9CkceSjh',
//         'X-Parse-REST-API-Key' => 'T0Ag23ExRe6UtCQb9KtD7mPFMjtatgWxhUwyZZRI',

//     ])->get('https://parseapi.back4app.com/classes/task');

//     return $response ;
//    // return view('httest');
// });



// Route::get('/testapp', function () {
//     return view('testapp');
// });


// Route::get('/HH', function () {
//     return view('home');
// });




Route::get('/da3m', function () {
    return view('da3m');
});


// //good prodectes
// Route::get('/da3m', function () {
//     // Only authenticated users may access this route...
// })->middleware('auth');

//taqeim
Route::get('/taqeim', function () {
    return view('add_taqeim');
});



Route::get('/monthly', function () {
    return view('month');
});

// Route::post('/home', function () {

//     return view('postok');
// });

Route::post('/home', [HomeController::class, 'store']);








// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
Auth::routes();
Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('/login', [LoginController::class, 'authenticate']);
