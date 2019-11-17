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

Route::get('/'           , 'PageController@index'     )->name('/');
Route::get('/index'      , 'PageController@index'     )->name('index');
Route::get('/carlisting' , 'PageController@carlisting')->name('carlisting');
Route::get('/aboutus'    , 'PageController@aboutus'   )->name('aboutus');
Route::get('/contactus'  , 'PageController@contactus' )->name('contactus');
Route::get('/term'       , 'PageController@term'      )->name('term');
Route::get('/privacy'    , 'PageController@privacy'   )->name('privacy');
Route::get('/faqs'      , 'PageController@faqs'       )->name('faqs');

Route::get('/details/{id}'   , 'PageController@details'   )->name('details');



// Route::get('/car' , function(){
//     $vehicles = DB::table('vehicles')->limit(4)->get();
//     var_dump($vehicles);
// });

// Ro
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
Route::get('/home/profile', 'HomeController@profile')->name('profile');
