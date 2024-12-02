<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TodosController::class,'index'])->name('todo.home');;
Route::get('/create', function () {
    return view('create');
})->name('todo.create');

//edit todo route
Route::get('/edit/{id}', [TodosController::class,'edit'])->name('todo.edit');
//Delete todo route
Route::get('/delete/{id}',[TodosController::class,'delete'])->name('todo.delete');
//update todo route
Route::get('/update/{id}', [TodosController::class,'updateData'])->name('todo.updateData');
//create todo route
Route::post('/create',[TodosController::class,'store'])->name('todo.store');
