<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\questionaryController;
use App\Http\Controllers\HomeController;
// multi login route
Route::get('enterlog', 'User\UserController@enterlog')->middleware('guest')->name('enterlog');
Route::get("/",'User\UserController@welcome')->name("welcome");
Route::get('user/', 'User\UserController@show')->name('user-dashboard');
Route::get('user/le-tue-iscrizioni', 'User\UserController@domande_iscrizioni')->name('user-iscrizioni');
Route::get('user/documenti','User\UserController@documenti')->name('user-documenti');
Route::get('user/pagamenti','User\UserController@pagamenti')->name('user-pagamenti');
Route::get('user2/', 'User\UserController@show2')->name('user-welcome2');
//Route::get('/user/la-tua-anagrafica','anagraficacontroller@index')->name('user-anagrafica')->middleware("spid.auth");
Route::get('/user/la-tua-anagrafica','anagraficacontroller@index')->name('user-anagrafica');
Route::get('/joinEvent', 'User\UserController@joinEvent')->name('joinEvent');
Route::post('/joinEvent','User\UserController@addorder')->name('order.store');
Route::get('/joinEvent/questionary', 'User\UserController@questionary')->name('questionary');

Route::get('/user/event', function () {
    return view('user.event');
});
Route::post('/logs','LogController@store')->name('logs.store');
Route::post('/user/documenti','DocumentController@store')->name('documenti.store');
Route::post('/user/la-tua-anagrafica','AnagraficaController@store')->name('anagrafica.store');
//Route::post('/user/la-tua-anagrafica','User\UserController@update')->name('user.update');
//Route::post('/user/la-tua-anagrafica','User\UserController@edit')->name('user.edit');
Route::post('panel/users/index','User\UserController@index')->name('user.edit');



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/private', 'PrivateController@index')->name('private');
//Route::post('/home', 'HomeController@store')->name('home.store');

//});
Route::get('/admin', function () {
    return view('admin.index');
});




//Route::get('/customers', function () {
//    return view('customers.index');
//});
//Route::get('customers/event', 'Customer\EventController@customerEvents')->name('customers.event')->middleware(['auth:customers']);
//Route::resource('customers', customerController::class);
//Route::resource('events', eventController::class);

Route::resource('admin/customers', 'customerController');
Route::resource('admin/events', 'eventController');


Route::resource('admin/users', 'userController');

Route::resource('admin/orders', 'orderController');
Route::resource('admin/questionaries', 'questionaryController');

//

Route::resource('customers/events', 'eventController');
Route::get('/customers', function () {
    return view('customers.index');
});
//
//);
//Route::prefix('admin')->group(function() {
//    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
//    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
//}) ;

//standardUsers



