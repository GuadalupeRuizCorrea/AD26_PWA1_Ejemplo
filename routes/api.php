<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\RecetaController;
use App\Http\Controllers\Api\EtiquetaController;

Route::get('categorias',[categoriaController::class,'index']);
Route::get('categorias/{categoria}',[categoriaController::class,'show']);

Route::get('recetas',[recetaController::class,'index']);
Route::get('recetas/{receta}',[recetaController::class,'show']);

Route::get('etiquetas',[etiquetaController::class,'index']);
Route::get('etiquetas/{etiqueta}',[etiquetaController::class,'show']);

//Route::get('/user', function (Request $request) {
//return $request->user();
//})->middleware('auth:sanctum');
