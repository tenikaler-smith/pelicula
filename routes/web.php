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
route::get("/noaccess", [Controller::class, "noaccess"])->name("noaccess");


route::get("/login", [UserController::class, "login"])->name("user.login");
route::get("/logout", [UserController::class, "logout"])->name("user.logout");
Route::post("/login", [UserController::class, "login_post"])->name("user.login_post");


route::get("/create", [UserController::class, "create"])->name("user.create");
route::post("/create", [UserController::class, "store"])->name("user.store");
route::get("/edit", [UserController::class, "edit"])->name("user.edit");
route::post("/update", [UserController::class, "update"])->name("user.update");


route::get("/catalog/", [CatalogController::class, "index"])->name("catalog.index");
route::get("/catalog/show/{id}", [CatalogController::class, "show"])->name("catalog.show");
route::get("catalog/create", [CatalogController::class, "create"])->name("catalog.create");
route::post("catalog/store", [CatalogController::class, "store"])->name("catalog.store");
route::get("/catalog/edit/{id}", [CatalogController::class, "edit"])->name("catalog.edit");
route::post("catalog/update", [CatalogController::class, "update"])->name("catalog.update");
route::get("/catalog/destroy/{id}", [UserController::class, "destroy"])->name("catalog.destroy");
