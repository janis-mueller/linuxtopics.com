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

Route::get('/', function () {
    return view('linuxtopics');
});
Route::get('/donate-bitcoin', function () {
    return view('donate-bitcoin');

});
Route::get('/freeipa', function () {
    return view('freeipa');

});
Route::get('/bitcoin', function () {
    return view('bitcoin');
});
Route::get('/sysadmin', function () {
    return view('sysadmin');
});

Route::get('/ssh-server-installation-unter-ubuntu-18-04', function () {
    return view('ssh-server-installation-unter-ubuntu-18-04');
});
