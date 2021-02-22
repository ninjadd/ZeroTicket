<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('tickets')->middleware('auth')->group(function () {

    Route::get('/{user?}', [App\Http\Controllers\TicketController::class, 'index'])->name('tickets.index');


});

Route::middleware(['auth', 'can:manage,App\Models\User'])->group(function () {

    Route::get('management', [App\Http\Controllers\UserManagementContrller::class, 'index'])->name('management.index');

    Route::get('management/create', [App\Http\Controllers\UserManagementContrller::class, 'create'])->name('management.create');

    Route::post('management', [App\Http\Controllers\UserManagementContrller::class, 'store'])->name('management.store');

    Route::get('management/{user}/edit', [App\Http\Controllers\UserManagementContrller::class, 'edit'])->name('management.edit');

    Route::put('management/{user}', [App\Http\Controllers\UserManagementContrller::class, 'update'])->name('management.update');

    Route::delete('management/{user}/destroy', [App\Http\Controllers\UserManagementContrller::class, 'destroy'])->name('management.destroy');

});
