<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Get
Route::get("/", function () {
    return view("welcome");
});
// Middleware
Route::middleware(["auth:sanctum", "verified"])->get("/dashboard", function () {
    return view("dashboard");
})->name("dashboard");
// Get
Route::get("/AdminDashboard",[HomeController::class, "AdminDashboard"]);
Route::get("/",[HomeController::class, "index"]);
Route::get("/product",[AdminController::class, "product"]);
// Post
Route::post("/uploadProduct",[AdminController::class, "uploadProduct"]);
// Get
Route::get("/showProduct",[AdminController::class, "showProduct"]);
Route::get("/deleteProduct/{id}",[AdminController::class, "deleteProduct"]);
Route::get("/updateView/{id}",[AdminController::class, "updateView"]);
// Post
Route::post("/updateProduct/{id}",[AdminController::class, "updateProduct"]);
// Get
Route::get("/search",[HomeController::class, "search"]);
// Post
Route::post("/addCart/{id}",[HomeController::class, "addCart"]);

Route::get("/showCart",[HomeController::class, "showCart"]);
Route::get("/delete/{id}",[HomeController::class, "deleteCart"]);
Route::post("/order",[HomeController::class, "confirmOrder"]);
Route::get("/showOrder",[AdminController::class, "showOrder"]);
Route::get("/updateStatus/{id}",[AdminController::class, "updateStatus"]);
Route::get("product/{id}",[HomeController::class, "showSingleProduct"]);
