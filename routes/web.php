<?php

use App\Http\Livewire\Pages\Admin;
use App\Http\Livewire\Pages\Barang;
use App\Http\Livewire\Pages\EditBarang;
use App\Http\Livewire\Pages\EditMahasiswa;
use App\Http\Livewire\Pages\Mahasiswa;
use App\Http\Livewire\Pages\User;
use Illuminate\Routing\RouteGroup;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin', Admin::class)->name('admin');
});

Route::group(['middleware' => ['auth', 'checkRole:user']], function () {
    Route::get('/user', User::class)->name('user');
});
Route::get('/mahasiswa', Mahasiswa::class)->name('mahasiswa');
Route::get('/edit-mahasiswa/{id}', EditMahasiswa::class)->name('edit-mahasiswa');

Route::get('/barang', Barang::class)->name('barang');
Route::get('/edit-barang/{id}', EditBarang::class)->name('edit-barang');