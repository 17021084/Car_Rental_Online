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
Route::get('/term', function () {
    return view('page.termofuse');
});
Route::get('/privacy', function () {
    return view('page.privacypolicy');
});

/*
// lưu một cái user
Route::get('model/user', function () {
    // khởi tạo class user 
    $user = new App\User();
    $user->name='passtu1den8';
    $user->email='erina@gmail';
    $user->password=bcrypt('12345678'); //mã hóa mật khẩu
    $user->save();
    echo "đã save()";
    
});

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
