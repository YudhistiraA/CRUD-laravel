<?php



//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/12', function () {
  return view('conten');
 });
Route::get('/1', function () {
 return view('tabels');
});
Route::resource('kontak','Kontak');
Route::get('/2', function () {
  return view('create');});
  
  Route::get('login','login@index');
  Route::post('/cek','login@cek');
  Route::get('/','dashboar@index');
  Route::get('/logout','login@logout');
  
  

 
  
