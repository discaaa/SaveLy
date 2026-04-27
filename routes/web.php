<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', fn() => view('dashboard.index'))->name('dashboard');

Route::prefix('expense')->name('expense.')->group(function () {

    Route::get('/', fn() => view('expense.index'))->name('index');

    Route::get('/create', fn() => view('expense.create'))->name('create');

});

Route::get('/history', fn() => view('history.index'))->name('history');

Route::get('/goals', fn() => view('goals.index'))->name('goals');