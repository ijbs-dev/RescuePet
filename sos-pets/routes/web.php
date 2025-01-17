<?php

use App\Http\Controllers\PetController;
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

Route::delete('/pets/excluir/{id}',[PetController::class,'destroy'])->name('pets.destroy');

Route::get('/', [PetController::class,'index'])->name('pets.index');


Route::get('/pets/create',[PetController::class,'create'])->middleware('auth')->name('pets.create');
Route::get('/pets/editar/{id}',[PetController::class,'edit'])->middleware('auth')->name('pets.edit');
Route::post('/pets/store',[PetController::class,'store'])->middleware('auth')->name('pets.store');
Route::get('/pets/{id}',[PetController::class,'show'])->name('pets.show');
Route::get('/meusPets',[PetController::class,'meusPets'])->name('pets.meusPets');
Route::put('/pets/editar/{id}',[PetController::class,'update'])->name('pets.update');

Route::post('/pets/agendar',[PetController::class,'agendar'])->middleware('auth')->name('pets.agendar');

Route::get('/agendamentos',[PetController::class,'meusAgendamentos'])->middleware('auth')->name('pets.agendamentos');

Route::get('/agendamentos/validar',[PetController::class,'validarAgendamentos'])->middleware('auth')->name('pets.validar-agendamentos');

Route::patch('/agendamentos/confirmar',[PetController::class,'ConfirmarAgendamentos'])->middleware('auth')->name('pets.confirmar-agendamentos');

Route::patch('/confirmar/adocao',[PetController::class,'confirmarAdocao'])->middleware('auth')->name('pets.confirmar-adocao');
Route::post('/agendamentos',[PetController::class,'agendamentos'])->middleware('auth')->name('pets.agendamentos');

Route::get('/contatos',[PetController::class,'contatos'])->name('pets.contatos');
Route::get('/sobre',[PetController::class,'sobre'])->name('pets.sobre');

Route::get('/pets/filtrar', [PetController::class,'filtrarPets'])->name('pets.filtrar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
