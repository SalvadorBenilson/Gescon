<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\http\Controllers\CondominioController;
use App\http\Controllers\PortariaController;
use App\Http\Controllers\ResidenciaController;
use App\Http\Controllers\ResidenteController;
use App\Http\Controllers\VisitaController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});
Route::resource('condominio', CondominioController::class);
Route::resource('portaria', PortariaController::class);
Route::resource('residencia', ResidenciaController::class);
Route::resource('residente', ResidenteController::class);
Route::resource('visita', VisitaController::class);





