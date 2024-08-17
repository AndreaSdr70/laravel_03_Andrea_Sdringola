<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeacherController;
//file di ROUTING

//!ROTTA NOMINALE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage'); //!meotodo name() per dare un nome ad una rotta

//studenti 
Route::get('/chiSiamo', [PublicController::class, 'chiSiamo'])->name('chi.siamo');
Route::get('/studenti/dettaglio/{id}', [PublicController::class, 'dettaglio'])->name('student.detail');

//docenti
Route::get('/docenti', [TeacherController::class, 'docenti'])->name('teachers');
//pagina di dettaglio dei docenti

//!ROTTA PARAMETRICA - rotta che accetta un parametro
Route::get('/docenti/dettaglio/{name}', [TeacherController::class, 'dettaglio'])->name('teacher.detail');