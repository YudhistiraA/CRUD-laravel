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
Route::resource('satpam','satpam');
Route::resource('pulau','pulau');
Route::get('/9', function () {
  return view('createpulau');});

  
  Route::get('login','login@index');
  Route::post('/cek','login@cek');
  Route::get('/','dashboar@index');
  Route::get('/logout','login@logout');
  
  

 
  
