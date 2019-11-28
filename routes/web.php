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

// page

use Symfony\Component\HttpFoundation\Request;

Route::get('/'           , 'PageController@index'     )->name('/');
Route::get('/index'      , 'PageController@index'     )->name('index');
Route::get('/carlisting' , 'PageController@carlisting')->name('carlisting');
Route::get('/aboutus'    , 'PageController@aboutus'   )->name('aboutus');
Route::get('/term'       , 'PageController@term'      )->name('term');
Route::get('/privacy'    , 'PageController@privacy'   )->name('privacy');
Route::get('/faqs'       , 'PageController@faqs'      )->name('faqs');
Route::get('/contactus'  , 'PageController@contactus' )->name('contactus');


Route::post('/pageinfor'  , 'PageController@pageinfor' )->name('pageinfor');

// car details
Route::get('/details/{id}'   , 'PageController@details'   )->name('details');
Route::get('/details/details/{id}'   , 'PageController@redetails'   )->name('/details/details');

//booking






// ================================
//test Post form
Route::get('testform', function () {
    return view('form');
})->name('test');
Route::post('post', 'PageController@post')->name('post');
//test Ajax
Route::get('ajax', function () {
    return view('ajax');
})->name('ajax');

// Route::post('ajax', 'PageController@ajax')->name('ajax');
// Route::post('/ajax/{id}', 'PageController@ajax')->name('postajax');

Route::post('/ajaxRequest', 'PageController@ajaxRequestPost');

// ================================



// admin
// Route::get('admin/login', 'Admin\AuthController@loginForm' );
// Route::post('admin/login', 'Admin\AuthController@login' )->name('admin.login'); // định danh để thằng form gọi tới


Route::get('admin/home', 'AdminController@index' )->name('admin.home');
Route::get('admin/vehicles', 'AdminController@vehicles' )->name('admin.vehicles');
Route::get('admin/booking', 'AdminController@booking' )->name('admin.booking');
Route::get('admin/users', 'AdminController@users' )->name('admin.users');
Route::get('admin/pages', 'AdminController@pages' )->name('admin.pages');
Route::get('admin/contact', 'AdminController@contact' )->name('admin.contact');
Route::post('admin/updatecontact', 'AdminController@updatecontact' )->name('admin.updatecontact');
Route::get('admin/testimonials', 'AdminController@testimonials' )->name('admin.testimonials');
Route::get('admin/editvehicle', 'AdminController@editvehicle' )->name('admin.editvehicle');
Route::get('admin/addvehicle', 'AdminController@addvehicle' )->name('admin.addvehicle');



// users 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile', 'HomeController@profile')->name('profile');
Route::get('/home/testimonials', 'HomeController@testimonials')->name('testimonials');
