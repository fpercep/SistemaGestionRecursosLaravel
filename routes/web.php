<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;

//Route::get('/', function () {return view('welcome');});
Route::get("/", [HomeController::class, 'index'])->name("home.index");
Route::get("/usuarios", [UserController::class, 'index'])->name("usuarios.index");
Route::get("/producto", [ProductoController::class, 'index'])->name("producto.index");
