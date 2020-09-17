<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ProfileDeleted;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//TODO: Public Shared
Route::prefix('notification')->name('notification.')->middleware('auth')->group(function() {

    Route::get('view', 'NotificationController@index')->name('view');
    Route::get('clear', 'NotificationController@markAllAsRead')->name('clear');
    Route::get('read/{notification}', 'NotificationController@markAsRead')->name('view.read');
    Route::get('single/read/{id}', 'NotificationController@singleMarkAsRead')->name('read');

});

//TODO: User Password Change
Route::middleware('auth')->group(function() {

    Route::resource('user', 'Admin\UserController');
    Route::get('profile/{user}', 'Admin\ProfileController@myProfile')->name('my.profile');
    Route::patch('profile/{user}', 'Admin\ProfileController@updateUser')->name('profile.update');
    Route::delete('profile/{user}', 'Admin\ProfileController@deleteUser')->name('profile.delete');
    Route::patch('password/{user}', 'Auth\ChangePasswordController@change')->name('password.change');

});

//TODO: Art component
Route::group(['middleware' => ['role_or_permission:Super-admin|read util|create util|delete util']], function () {

    Route::namespace('Art')->prefix('component')->name('art.')->group( function () {

            Route::resource('subject', 'SubjectController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('category', 'CategoryController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('style', 'StyleController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('medium', 'MediumController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('material', 'MaterialController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('size', 'SizeController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('status', 'StatusController');

    });

});

Route::namespace('Register')->prefix('component')->name('register.')->group( function() {

    Route::resource('gallery', 'GalleryController');
    Route::resource('regional', 'RegionalController');
    Route::resource('special', 'SpecialController');

});

Route::group(['middleware' => ['role_or_permission:Super-admin|read util|create util|delete util']], function () {

    Route::resource('art', 'ArtController');
});

Route::patch('art/status/{art}', 'ArtUtility@status');

Route::namespace('Help')->group( function() {

    Route::get('about', 'AboutController@index');
    Route::get('about/edit/{about}', 'AboutController@edit');
    Route::patch('about', 'AboutController@update');

    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@send');

});
