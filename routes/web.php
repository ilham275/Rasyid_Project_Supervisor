<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\KurikulumController;
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
    return redirect('/login');
});
Route::get('/password/reset', function () {
    return redirect('/login');
});
Route::get('/register', function () {
    return redirect('/login');
});

Auth::routes([
    'password.reset' => false,
    'verify' => false,
    'password.request' => false,
    'reset'=>false,
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'guru'], function(){
        Route::get('/guru/home', [GuruController::class, 'index'])->name('guru.home');
    });

    Route::group(['middleware' => 'kepsek'], function(){
        Route::get('/kepsek/home', [KepsekController::class, 'index'])->name('kepsek.home');
    });

    Route::group(['middleware' => 'kurikulum'], function(){
        Route::get('/kurikulum/home', [KurikulumController::class, 'index'])->name('kurikulum.home');
        Route::get('/add-account', [App\Http\Controllers\KurikulumController::class, 'getKurikulum'])->name('add-kurikulum');
        Route::post('/add-account', [App\Http\Controllers\KurikulumController::class, 'postKurikulum'])->name('post-kurikulum');
        Route::patch('/set-Supervisor/{id}', [App\Http\Controllers\KurikulumController::class, 'setSupervisor'])->name('set-kurikulum');
        Route::delete('/{id}', [App\Http\Controllers\KurikulumController::class, 'deleteAccount'])->name('delete');
        Route::patch('/{id}', [App\Http\Controllers\KurikulumController::class, 'UpdateAccount'])->name('update');
        Route::get('/', [KurikulumController::class, 'listJadwal'])->name('jadwal');
        Route::get('/add-jadwal', [KurikulumController::class, 'getJadwal'])->name('get-jadwal');
        Route::post('/add-jadwal', [KurikulumController::class, 'postJadwal'])->name('post-jadwal');
    });

       
    

});
