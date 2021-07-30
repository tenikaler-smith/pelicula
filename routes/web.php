<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FacturaDetalleController;
use App\Http\Controllers\CarritoController;



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

// Rutas para la aplicación de catalogo
route::get("/catalog/", [CatalogController::class, "index"])->name("catalog.index");
route::get("/catalog/show/{id}", [CatalogController::class, "show"])->name("catalog.show");
route::get("catalog/create", [CatalogController::class, "create"])->name("catalog.create");
route::post("catalog/store", [CatalogController::class, "store"])->name("catalog.store");
route::get("/catalog/edit/{id}", [CatalogController::class, "edit"])->name("catalog.edit");
route::post("catalog/update", [CatalogController::class, "update"])->name("catalog.update");
route::get("/catalog/destroy/{id}", [CatalogController::class, "destroy"])->name("catalog.destroy");


//  para la aplicación de Generos
route::get("/genero/", [GeneroController::class, "index"])->name("genero.index");
route::get("/genero/show/{id}", [GeneroController::class, "show"])->name("genero.show");
route::get("genero/create", [GeneroController::class, "create"])->name("genero.create");
route::post("genero/store", [GeneroController::class, "store"])->name("genero.store");
route::get("/genero/edit/{id}", [GeneroController::class, "edit"])->name("genero.edit");
route::post("genero/update", [GeneroController::class, "update"])->name("genero.update");
route::get("/genero/destroy/{id}", [GeneroController::class, "destroy"])->name("genero.destroy");

//  para la aplicación de Carrito de Compra
route::get('/carrito', [CarritoController::class, 'index'])->name("carrito.index");
route::post('/carrito/store', [CarritoController::class, 'store'])->name("carrito.store");
route::get('/carrito/delete/{id}', [CarritoController::class, 'delete'])->name("carrito.delete");
route::get('/procesar/{id}', [CarritoController::class, 'procesar'])->name("carrito.procesar");

// para la aplicación de Facturas
route::get("/factura/", [FacturaController::class, "index"])->name("factura.index");
route::get('/compras', [FacturaDetalleController::class, 'index'])->name("factura-detalle.index");
