<?php

use Illuminate\Support\Facades\Route;
use App\Models\Appointment;

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
Route::get('/table', function () {
    return view('table');
});


// Route::post('appointments', [App\Http\Controllers\AppointmentController::class, 'store']);


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    // Route::get('/', 'ContentController@index')->name('home');
    
    Route::get('/login', 'LoginController@show')->name('login.show');
    
    Route::post('/login', 'LoginController@login')->name('login.perform');

    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');

    Route::get('/logout', 'LoginController@logout')->name('logout');

});

Route::group(['middleware' => ['auth']], function() {

    Route::get('appointments', [App\Http\Controllers\AppointmentController::class, 'index']);
    Route::get('appointments/table', [App\Http\Controllers\AppointmentController::class, 'indexTable']);
    Route::get('appointments{id}', [App\Http\Controllers\AppointmentController::class, 'show']);
    Route::get('appointments/create', [App\Http\Controllers\AppointmentController::class, 'create']);
    Route::post('appointments', [App\Http\Controllers\AppointmentController::class, 'store']);
    Route::delete('appointments/{id}', [App\Http\Controllers\AppointmentController::class, 'destroy']);
    
    });