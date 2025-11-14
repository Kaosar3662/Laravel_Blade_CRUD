<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    "prefix" => "products",
    "as" => "product.",
], function () {
    Route::get('/', [ProductController::class, "index"])->name("index");
    Route::get('/create', [ProductController::class, "create"])->name("create");
    Route::post('/', [ProductController::class, "store"])->name("store");
    Route::get('/{product}/edit', [ProductController::class, "edit"])->name("edit");
    Route::put('/{product}/update', [ProductController::class, "update"])->name("update");
});
