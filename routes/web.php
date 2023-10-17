<?php

use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/especialidades', [EspecialidadesController::class, 'index'])
    ->name('especialidades');

Route::get('/especialidades/add', [EspecialidadesController::class, 'add'])
    ->name('especialidades.add');

    Route::post('/especialidades/store', [EspecialidadesController::class, 'store'])
    ->name('especialidades.store');

    Route::get('/especialidades/edit/{id}', [EspecialidadesController::class, 'edit'])
    ->name('especialidades.edit');

    Route::post('/especialidades/update', [EspecialidadesController::class, 'update'])
    ->name('especialidades.update');

    Route::delete('/especialidades/delete/{id}', [EspecialidadesController::class, 'delete'])
    ->name('especialidades.delete');
