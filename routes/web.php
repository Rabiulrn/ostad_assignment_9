<?php

use App\Http\Controllers\AboutConroller;
use App\Http\Controllers\ContractConroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsConroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/about", [AboutConroller::class,"index"])->name("about");
Route::get("/projects", [ProjectsConroller::class,"index"])->name("projects");
Route::get("/contract", [ContractConroller::class,"index"])->name("contract");
