<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "/address");

Route::get("/address", [AddressController::class, "index"]);
Route::post("/address", [AddressController::class, "store"]);
