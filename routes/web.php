<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;

Route::get('/', function () { return view('index');})->name('index');


Route::get( '/recipes' , [RecipesController::class, 'index']) ->name('recipes.index');
Route::get('/recipes/create' , [RecipesController::class , 'create']) ->name('recipes.create');
Route::post('/recipes/store' , [RecipesController::class , 'store'])->name('recipes.store');
Route::get('/recipes/{recipe}/edit' , [RecipesController::class , 'edit'])->name('recipes.edit');
Route::put('/recipes/{recipe}',[RecipesController::class, 'update'])->name('recipes.update');
Route::delete('/recipes/{recipe}', [RecipesController::class, 'destroy'])->name('recipes.destroy');
