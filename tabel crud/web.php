<?php

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

// Route::get('/1', function () {
//    // return view('welcome');
//    echo "one";
// });
// Route::get('/2', function () {
//     // return view('welcome');
//     echo "two";
//  });
//  Route::get('/3', function () {
//     // return view('welcome');
//     echo "three";
//  });
//  Route::get('/4', function () {
//     // return view('welcome');
//     echo "four";
//  });
//  Route::get('/5', function () {
//     // return view('welcome');
//     echo "five";
//  });
//  Route::get('/6', function () {
//     // return view('welcome');
//     echo "six";
//  });
//  Route::get('/7', function () {
//     // return view('welcome');
//     echo "seven";
//  });
//  Route::get('/8', function () {
//     // return view('welcome');
//     echo "eight";
//  });
//  Route::get('/9', function () {
//     // return view('welcome');
//     echo "nine";
//  });
 Route::resource('data','kontak'); //tambahkan baris ini
 Route::get('/', function() {
     return view('index');
   });
//  Route::get('/11', 'budi@index');
//  Route::get('/12', 'kontakc@index');
 
