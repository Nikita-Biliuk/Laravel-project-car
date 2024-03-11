<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/create', [App\Http\Controllers\SavininkasController::class,'create'])->name('user.create');
Route::post('/user/store', [App\Http\Controllers\SavininkasController::class, 'store'])->name('user.store');
Route::get('/user', [App\Http\Controllers\SavininkasController::class,'index'])->name('user.index');
Route::get('/user/{id}/edit',[App\Http\Controllers\SavininkasController::class,'edit'])->name('user.edit');
Route::post('/user/{id}/save',[App\Http\Controllers\SavininkasController::class,'save'])->name('user.save');
Route::get('/user/{id}/delete', [App\Http\Controllers\SavininkasController::class, 'delete'])->name('user.delete');
Route::get('/users', 'SavininkasController@index')->name('users.index');



