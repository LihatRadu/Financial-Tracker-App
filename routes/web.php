<?php

use App\Livewire\BudgetList;
use App\Livewire\TransactionList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/transactions', TransactionList::class);
Route::get('/budgets', BudgetList::class);
