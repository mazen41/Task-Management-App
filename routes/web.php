<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/show/{id}', [TaskController::class, 'show'])->name('Task.show');
Route::post('/categories/create', [TaskController::class, 'store'])->name('Task.store');
Route::post('/tasks/delete', [TaskController::class, 'destroy'])->name('Task.destroy');
Route::get('/categories/delete', [TaskController::class, 'deleteCategories'])->name('categories.delete');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('Task.edit');
Route::post('/task/update', [TaskController::class, 'update'])->name('Task.update');
Route::get('/task/delete/{category_id}/{task_id}', [TaskController::class, 'deleteTask'])->name('Task.delete');
Route::get('category/delete/{id}', [TaskController::class, 'deleteCategory'])->name('category.delete');
Route::get('task/complete/{id}', [TaskController::class, 'taskCompleted'])->name('task.complete');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/category', function () {
    return view('category');
});
// Route::get('/try', function() {
//     return view('layouts.category');
// });
Route::get('/collections', function () {
    return view('collections');
})->name('collections');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
