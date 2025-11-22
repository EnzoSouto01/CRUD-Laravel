<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;


Route::get('/', function(){return PrincipalController::principal();})->name('site.principal');
Route::get('/tecnico', function(){return PrincipalController::tecnico();})->name('site.tecnico');
Route::get('/mtec', function(){return PrincipalController::mtec();})->name('site.mtec');
Route::get('/ams', function(){return PrincipalController::ams();})->name('site.ams');
Route::get('/secretaria', function(){return PrincipalController::secretaria();})->name('site.secretaria');
Route::get('/contato', function(){return PrincipalController::contato();})->name('site.contato');

Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth.custom')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'perfil'])->name('perfil');
    Route::get('/perfil/editar', [ProfileController::class, 'editarView'])->name('perfil.editar');
    Route::post('/perfil/editar', [ProfileController::class, 'editar']);

    Route::get('/perfil/excluir', [ProfileController::class, 'excluir'])->name('perfil.excluir');
});

