<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get("/", [Controller::class, "index"])->name("index");


route::get("/login", [UserController::class, "login"])->name("user.login");
route::get("/logout", [UserController::class, "logout"])->name("user.logout");


route::get("/catalog/", [CatalogController::class, "index"])->name("catalog.index");
route::get("/catalog/show/{id}", [CatalogController::class, "show"])->name("catalog.show");
route::get("catalog/create", [CatalogController::class, "create"])->name("catalog.create");
route::get("/catalog/edit/{id}", [CatalogController::class, "edit"])->name("catalog.edit");


Route::post("/loginpost", [Controller::class, "loginPost"])->name("user.loginPost");

