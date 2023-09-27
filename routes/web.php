<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
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

Route::get('/', [PageController::class, "main"]);
Route::get('/about', [PageController::class, "about"])->name("about");
Route::get('/contact', [PageController::class, "contact"])->name("contact");
Route::get('/terminal', [PageController::class, "terminal"])->name("terminal");

Route::resource("properties", PropertyController::class);
Route::resource("agents", AgentController::class);
