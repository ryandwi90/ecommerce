<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::get("/produk", [ProdukController::class, "produk"]);

Route::get("/category", [CategoryController::class, "category"]);
Route::get("/tambah_category", [CategoryController::class, "tambah_category"]);
Route::get("/edit_category", [CategoryController::class, "edit_category"]);