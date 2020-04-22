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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', "WebController@LoginView");
Route::post('/login','AuthController@login');

Route::group(['middleware' => 'auth:web'], function() {
    Route::get('/inventar', 'WebController@InventoryView');

    Route::get('/inventar/ret', 'WebController@InventoryEditView');
    Route::post('/inventar/ret', 'ProductController@create');
    Route::put('/inventar/ret', 'ProductController@update');
    Route::delete('/inventar/ret/{id}', 'ProductController@delete');

    Route::get('/admin', 'WebController@InventoryEditView');
    
    Route::get('/brugere', 'WebController@UsersView');
    Route::get('/bruger/ret', 'WebController@UsersEditView');
    Route::post('/bruger/opret','UserController@register');
    Route::post('/bruger/ret','UserController@edit');
    Route::get('/bruger/slet','UserController@delete');
});

Route::get('/logout', 'LogoutController@logout');