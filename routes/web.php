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

$prefijo = config('global.router_prefix');

Route::get($prefijo . '/{any}', 'AppController@index')->where('any', '.*');
Route::get($prefijo, 'AppController@index')->where('any', '.*');

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/Empresa', function () {
    return view('dashboard');
})->name('dashboard');
