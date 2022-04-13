<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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

// route to show users
// Route::get('users', 'Users@index');
// Route::get('/users', [User::class, 'index']);

Route::get('/' , [Users::class,'index']);

Route::get('stars' , [Users::class,'show']);
 
Route::get('users' , [Users::class,'inventory']);
 