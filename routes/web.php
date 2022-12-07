<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Main\IndexController;

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

Route::get('/', 'App\Http\Controllers\Main\IndexController');
Route::get('admin', 'App\Http\Controllers\Admin\IndexController');


// Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){

// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
