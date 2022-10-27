<?php

use Illuminate\Support\Facades\Route;

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

//paypal route
Route::post('pay',[\App\Http\Controllers\PaymentController::class,'pay'])->name('payment');
Route::get('success',[\App\Http\Controllers\PaymentController::class,'success']);
Route::get('error',[\App\Http\Controllers\PaymentController::class,'error']);



//Route::Auth();
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', [\App\Http\Controllers\Front\HomeController::class, "index"])->name('home');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('role:admin');

    \Illuminate\Support\Facades\Auth::routes();



// tag route

    Route::resource('tag', 'TagController');
    Route::post('/tag/update/{tag}', 'TagController@update')->name('tag.update');
    Route::get('/tag/delete/{tag}', 'TagController@destroy')->name('tag.delete');


//    Route::post('/subscriber/register', 'Register@showRegistrationForm')->name('subscriber.register');



    // route for video
    Route::resource('video', 'VideoController');
    Route::post('/video/update/{video}', 'VideoController@update')->name('video.update');
    Route::get('/video/delete/{video}', 'VideoController@destroy')->name('video.delete');
    Route::get('/video/show/{slug}', 'VideoController@show')->name('video.show');
    Route::get('/video/trailler/{slug}', 'VideoController@showTrailler')->name('video.show.trailler');



    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
//        Route::get('/register', 'RegisterController@show')->name('register.show');
//        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
//        Route::get('/login', 'Auth\LoginController@show')->name('login.show');
//        Route::post('/login', 'Auth\LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
//        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });


        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});
