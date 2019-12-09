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
Route::post('/booking'   , 'PageController@booking'   )->name('booking');
//search
Route::get('/search'   , 'PageController@search'   )->name('search');



// admin


Route::get('admin/login', 'Admin\AuthController@loginForm' )->name('admin.login'); 
Route::post('admin/login', 'Admin\AuthController@postlogin' )->name('admin.postlogin'); 
Route::get('admin/logout', 'Admin\AuthController@logout' )->name('admin.logout'); 


Route::get('admin/', 'AdminController@index' )->name('admin');
Route::get('admin/home', 'AdminController@index' )->name('admin.home');
Route::get('admin/vehicles', 'AdminController@vehicles' )->name('admin.vehicles');
Route::get('admin/booking', 'AdminController@booking' )->name('admin.booking');
Route::post('admin/bookingupdate', 'AdminController@bookingupdate' )->name('admin.bookingupdate');
Route::get('admin/users', 'AdminController@users' )->name('admin.users');
Route::get('admin/pages', 'AdminController@pages' )->name('admin.pages');
Route::post('admin/postpages', 'AdminController@postpages' )->name('admin.postpages');
Route::get('admin/contact', 'AdminController@contact' )->name('admin.contact');
Route::post('admin/updatecontact', 'AdminController@updatecontact' )->name('admin.updatecontact');
Route::get('admin/testimonials', 'AdminController@testimonials' )->name('admin.testimonials');
Route::post('admin/testupdate', 'AdminController@testupdate' )->name('admin.testupdate');
Route::get('admin/editvehicle/{id}', 'AdminController@editvehicle' )->name('admin.editvehicle');
Route::post('admin/deletevehicle/{id}', 'AdminController@deletevehicle' )->name('admin.deletevehicle');
Route::post('admin/posteditvehicle', 'AdminController@posteditvehicle' )->name('admin.posteditvehicle');
Route::get('admin/addvehicle', 'AdminController@addvehicle' )->name('admin.addvehicle');
Route::get('admin/postaddvehicle', 'AdminController@postaddvehicle' )->name('admin.postaddvehicle');
Route::get('admin/guestcontact', 'AdminController@guestcontact' )->name('admin.guestcontact');




// users 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deletebooking/{id}', 'HomeController@deletebooking')->name('deletebooking');
Route::get('/home/profile', 'HomeController@profile')->name('profile');
Route::post('/home/updateprofile', 'HomeController@updateprofile')->name('updateprofile');
Route::get('/home/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::post('/home/posttestimonials', 'HomeController@posttestimonials')->name('posttestimonials');
