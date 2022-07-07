<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdocaoController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('index');
})->name('/');

Auth::routes();

Route::controller(UserController::class)->group(function () {
    Route::get('/logged', 'index')->name('logged.index');
    
    Route::get('/Tutor', 'index')->name('tutor.index');
    Route::post('/Tutor/criar', 'storeTutor')->name('tutor.store');
    Route::get('/Tutor/remover', 'removeLogged')->name('tutor.remove');
    Route::get('/Tutor/atualizar', 'editLogged')->name('tutor.edit');
    Route::post('/Tutor/edit', 'updateLogged')->name('tutor.update');

    Route::get('/Funcionario', 'index')->name('funcionario.index');
    Route::get('/Funcionario/usuarios', 'list')->name('funcionario.user.list');
    Route::get('/Funcionario/show', 'showLogged')->name('funcionario.show');
    Route::get('/Funcionario/show/{id}', 'show')->name('funcionario.user.show');
    Route::get('/Funcionario/cadastrar/funcionario', 'createFuncionario')->name('funcionario.user.createf');
    Route::post('/Funcionario/criar', 'storeFuncionario')->name('funcionario.user.storef');
    
    Route::get('/Funcionario/cadastrar/tutor', 'createTutor')->name('funcionario.user.createt');
    Route::post('/Funcionario/criar/tutor', 'storeTutor')->name('funcionario.user.storet');
    Route::get('/Funcionario/remover', 'removeLogged')->name('funcionario.removelog');
    Route::get('/Funcionario/remover/{id}', 'remove')->name('funcionario.user.remove');
    Route::get('/Funcionario/atualizar', 'editLogged')->name('funcionario.editlog');
    Route::get('/Funcionario/atualizar/{id}', 'edit')->name('funcionario.user.edit');
    Route::post('/Funcionario/edit/{id}', 'update')->name('funcionario.user.update');
    Route::post('/Funcionario/edit', 'updateLogged')->name('funcionario.updatelog');
});

Route::controller(AnimalController::class)->group(function () {
    Route::get('/Tutor/Animal/', 'index')->name('tutor.animal.index');
    Route::get('/Tutor/Animal/show', 'show')->name('tutor.animal.show');

    Route::get('/Funcionario/Animal/', 'index')->name('funcionario.animal.index');
    Route::get('/Funcionario/Animal/show/{id}', 'show')->name('funcionario.animal.show');
    Route::get('/Funcionario/Animal/cadastrar', 'create')->name('funcionario.animal.create');
    Route::post('/Funcionario/Animal/criar', 'store')->name('funcionario.animal.store');
    Route::get('/Funcionario/Animal/remover/{id}', 'remove')->name('funcionario.animal.remove');
    Route::get('/Funcionario/Animal/atualizar/{id}', 'edit')->name('funcionario.animal.edit');
    Route::post('/Funcionario/Animal/edit', 'update')->name('funcionario.animal.update');
});

Route::controller(AdocaoController::class)->group(function () {
    Route::get('/Tutor/Adocao/', 'index')->name('tutor.adocao.index');
    Route::get('/Tutor/Adocao/criar', 'store')->name('tutor.adocao.store');
    Route::get('/Tutor/Adocao/cancelar/{id}', 'cancel')->name('tutor.adocao.cancel');
    
    Route::get('/Funcionario/Adocao/', 'index')->name('funcionario.adocao.index');
    Route::get('/Funcionario/Adocao/show/{id}', 'show')->name('funcionario.adocao.show');
    Route::get('/Funcionario/Adocao/cadastrar', 'create')->name('funcionario.adocao.create');
    Route::post('/Funcionario/Adocao/criar', 'store')->name('funcionario.adocao.store');
    Route::get('/Funcionario/Adocao/remover/{id}', 'remove')->name('funcionario.adocao.remove');
    Route::get('/Funcionario/Adocao/atualizar/{id}', 'edit')->name('funcionario.adocao.edit');
    Route::post('/Funcionario/Adocao/edit', 'update')->name('funcionario.adocao.update');
});
