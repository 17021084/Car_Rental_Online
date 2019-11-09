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

Route::get('/', function () {
    return view('page.index');
});
Route::get('/home', function () {
    return view('page.index');
});
Route::get('/carlisting', function () {
    return view('page.carlisting');
});

Route::get('/aboutus', function () {
    return view('page.aboutus');
});
Route::get('/faqs', function () {
    return view('page.faqs');
});

Route::get('/contactus', function () {
    return view('page.contactus');
});
