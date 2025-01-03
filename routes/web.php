<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeitorController;

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
})->name('login');

Route::get('/register', function(){
    return view('perfil.register');    
})->name('register');

Route::get('/perfil', function(){
    return view('perfil.index');    
})->name('perfil.index');

Route::get('/livro', function(){
    return view('livro.index');    
})->name('livro.index');

/* Rotas de Leitores*/
Route::put('/leitor/update', [LeitorController::class, 'update'])->name('leitor.update');
Route::post('/leitor', [LeitorController::class, 'store'])->name('leitor.store');
Route::get('/leitor', [LeitorController::class, 'index'])->name('leitor.index');
// Route::get('/leitor/{id}/edit', [LeitorController::class, 'edit'])->name('leitor.edit');
Route::get('/leitor/{id}', [LeitorController::class, 'destroy'])->name('leitor.destroy');
// Route::post('/leitor/search', [LeitorController::class, 'search'])->name('leitor.search');
// Route::get('/leitor/{id}/show', [LeitorController::class, 'show'])->name('leitor.show');

Route::get('/emprestimo', function(){
    return view('emprestimo.index');    
})->name('emprestimo.index');

Route::get('/dashboard', function(){
    return view('dashboard');    
})->name('dashboard');

