<?php

use App\Http\Controllers\Controller;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard');
    Route::get('/dashboard-show/{id}', [Controller::class, 'show']);
    Route::delete('/dashboard-delete/{id}', [Controller::class, 'delete']);
    Route::get('/dashboard-create', [Controller::class, 'create']);
    Route::post('/dashboard-store', [Controller::class, 'store']);
    Route::get('/dashboard-edit/{id}', [Controller::class, 'edit']);
    Route::put('/dashboard-update/{id}' , [Controller::class, 'update']);
});
