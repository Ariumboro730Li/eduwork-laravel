<?php

use App\Http\Controllers\IncomeController;

Route::prefix('income')->group(function () {
    Route::get('/', [IncomeController::class, 'index'])->name("income");
    Route::get('/no-ajax', [IncomeController::class, 'noAjax'])->name("income.no-ajax");
    Route::get('data-table', [IncomeController::class, 'dataTable']);
    Route::get('get-string', [IncomeController::class, 'getString']);
    Route::get('store', [IncomeController::class, 'store'])->name("income.store.get");
    Route::post('store', [IncomeController::class, 'store'])->name("income.store.post");
    Route::get('category', [IncomeController::class, 'getCategory']);
});
