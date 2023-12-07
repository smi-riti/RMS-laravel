<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;



Route::get("/", [ResultController::class,"index"])->name("home");
Route::post("/insert", [ResultController::class,"storeResult"])->name("store");
Route::put("/update/{id}", [ResultController::class,"updateResult"])->name("update");
Route::get("/delete/{id}", [ResultController::class,"deleteResult"])->name("delete");
?>