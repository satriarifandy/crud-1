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

Route::get('/', function(){
    return view('items.konten');
});

Route::get('/data-tables', function(){
    return view('items.datatables');
});

Route::get('/index', 'JawabanController@index');

Route::get('/buatjawaban', function(){
    return view('items.buatjawaban');
});

Route::post('/buatjawaban', 'JawabanController@store');
Route::get('/jawaban/{$pertanyaans->id}', 'JawabanController@create');

Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@detail');
Route::post('/pertanyaan/{pertanyaan_id}', 'JawabanController@store');