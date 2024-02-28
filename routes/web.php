<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', function () {
    return view('cliente.shop');
})->name('store');

Route::get('/store2', function () {
    return view('cliente.shop2');
})->name('store2');



Route::get('/panel_admin', function () {
    return view('cliente.panel_admin');
})->name('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/products', function () {
    return view('cliente.products');
})->name('products');

Route::get('/promociones', function () {
    return view('cliente.promociones');
})->name('promociones');

Route::get('/nosotros', function () {
    return view('cliente.nosotros');
})->name('nosotros');



Route::get('/encuentranos', function () {
    return view('cliente.encuentranos');
})->name('encuentranos');




Route::get('/admin/users', function () {
    return view('admin.users');
})->name('adminUsers');
