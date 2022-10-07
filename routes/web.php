<?php

use App\Http\Controllers\AlteracaoController;
use App\Http\Controllers\ConstituicaoController;
use App\Http\Controllers\MeisController;
use App\Http\Middleware\VerifyCsrfToken;
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
    return redirect()->route('dashboard');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'constituicao', 'as' => 'constituicao.'], function () {
        Route::controller(ConstituicaoController::class)->group(function () {
            Route::get('adicionar', 'create')->name('adicionar');
            Route::post('/', 'postAdicionarConstituicao')->name('post-adicionar-constituicao');
            Route::get('adicionar/{constituicao}/socio', 'adicionarSocio')->name('adicionar-socio');
            Route::get('adicionar/{constituicao}/filial', 'adicionarFilial')->name('adicionar-filial');
            Route::get('lista', 'listaConstituicoes')->name('lista-constituicoes');
            Route::get('visualizar/{constituicao}', 'visualizarConstituicao')->name('visualizar-constituicao');
            Route::patch('{constituicao}', 'update')->name('patch-atualizar-constituicao')->withoutMiddleware(VerifyCsrfToken::class);
        });
    });

    Route::group(['prefix' => 'alteracao', 'as' => 'alteracao.'], function () {
        Route::controller(AlteracaoController::class)->group(function () {
            Route::get('adicionar', 'create')->name('adicionar');
            Route::post('/', 'postAdicionarAlteracao')->name('post-adicionar-alteracao');
            Route::get('adicionar/{alteracao}/socio', 'adicionarSocio')->name('adicionar-socio');
            Route::get('adicionar/{alteracao}/filial', 'adicionarFilial')->name('adicionar-filial');
            Route::get('lista', 'listaAlteracoes')->name('lista-alteracoes');
            Route::get('visualizar/{alteracao}', 'visualizarAlteracao')->name('visualizar-alteracao');
            Route::patch('{alteracao}', 'update')->name('patch-atualizar-alteracao')->withoutMiddleware(VerifyCsrfToken::class);

        });
    });

    Route::group(['prefix' => 'mei', 'as' => 'mei.'], function () {
        Route::controller(MeisController::class)->group(function () {
            Route::get('adicionar', 'create')->name('adicionar');
            Route::post('/', 'store')->name('post-adicionar-mei');
            Route::get('lista', 'listaMeis')->name('lista-meis');
            Route::get('visualizar/{mei}', 'visualizarMei')->name('visualizar-mei');
            Route::patch('{mei}', 'update')->name('patch-atualizar-mei')->withoutMiddleware(VerifyCsrfToken::class);
        });
    });
});

require __DIR__ . '/auth.php';
