<?php

use App\Modules\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->as('dashboard.')->controller(DashboardController::class)->group(function () {
      Route::get('', 'findAll')->name('findAll');
    });
