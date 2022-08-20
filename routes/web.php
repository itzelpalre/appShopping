<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\BuscadorProductsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PDFController;

//Pantalla Principal
Route::get('/', function () {
    return view('welcome');
});

//Rutas Autenticacion
Auth::routes();

//Ruta despues del Inicio de Sesion
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ruta Usuarios
Route::get('/usuarios', [ UsuariosController::class, 'index'])
->name('usuarios.index');

Route::post('/users/create', [ UsuariosController::class, 'store'])
->name('users.store');

//Ruta Categorias
Route::get('/categorias', [ CategoriasController::class, 'index'])
->name('categorias.index');

Route::post('/categorias/create', [ CategoriasController::class, 'store'])
->name('categorias.store');

Route::get('/categoriasCrear', [ CategoriasController::class, 'create'])
->name('categoriasCrear.create');

Route::resource('eliminarCategoria', CategoriasController::class);

Route::resource('editarCategoria', CategoriasController::class);

//Buscador
Route::resource('buscarCategoria', BuscadorController::class);
Route::resource('buscarProducto', BuscadorProductsController::class);

//Ruta Contenido
Route::get('/productos', [ ProductsController::class, 'index'])
->name('productos.index');

Route::get('/productosCrear', [ ProductsController::class, 'create'])
->name('productosCrear.create');

Route::post('/products/create', [ ProductsController::class, 'store'])
->name('products.store');

Route::resource('eliminarCont', ProductsController::class);

Route::resource('editarCont', ProductsController::class);

//Ruta PDF
Route::get('/pdf', [ PDFController::class, 'PDF'])
->name('descargarPDF');

