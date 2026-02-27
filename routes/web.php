<?php

use App\Modules\Cadastro\CadastroController;
use App\Modules\Dashboard\DashboardController;
use App\Modules\Fatura\FaturaController;
use App\Modules\Relatorio\RelatorioController;
use Illuminate\Support\Facades\Route;

  Route::prefix('dashboard')->as('dashboard.')->controller(DashboardController::class)->group(function () {
    Route::get('', 'findAll')->name('findAll');
  });

  Route::prefix('fatura')->as('fatura.')->controller(FaturaController::class)->group(function(){
    Route::get('', 'findAll')->name('findAll');
  });

  Route::prefix('relatório')->as('relatorio.')->controller(RelatorioController::class)->group(function(){
    Route::get('', 'findAll')->name('findAll');
  });

  Route::prefix('cadastro')->as('cadastro.')->controller(CadastroController::class)->group(function(){
    Route::get('', 'findAll')->name('findAll');
  });
