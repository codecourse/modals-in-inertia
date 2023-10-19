<?php

use App\Http\Controllers\ExampleModalController;
use App\Http\Controllers\Notes\NoteCreateController;
use App\Http\Controllers\Notes\NoteIndexController;
use App\Http\Controllers\Notes\NoteShowController;
use App\Http\Controllers\Notes\NoteStoreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/modals/example', ExampleModalController::class)->name('modals.example');

Route::get('/notes', NoteIndexController::class)->name('notes');
Route::get('/notes/create', NoteCreateController::class)->name('notes.create');
Route::post('/notes', NoteStoreController::class)->name('notes.store');
Route::get('/notes/{note}', NoteShowController::class)->name('notes.show');

require __DIR__.'/auth.php';
