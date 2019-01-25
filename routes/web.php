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

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/about', function () {
  return view('pages.about', ['name' => 'Thao Le']); 
});

Route::get('/work', 'HomeController@getWork')->name('work');

Route::get('/services', 'HomeController@getServices')
  ->name('services');

Route::get('/contact', function () {
  return view('pages.contact');
})-> name('contact');