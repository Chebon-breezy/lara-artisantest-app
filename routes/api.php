<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('todoList', [TodoListController::class, 'index'])->name('todoList.index');
Route::get('todoList{list}', [TodoListController::class, 'show'])->name('todoList.show');
