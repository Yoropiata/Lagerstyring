<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');

Route::group(['middleware' => 'auth:api'], function() {
    // TODO: move register, products, users, departments in here.
});

Route::get('products/get/{id}', 'API\ProductController@get');
Route::get('products', 'API\ProductController@getall');
Route::get('users', 'API\UserController@getall');
Route::get('departments', 'API\DepartmentController@getall');