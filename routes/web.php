<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PaisController;

Route::get('/', function () {
    return view('welcome');
});

//RUTAS COMUNA

Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');

//RUTAS MUNICIPIO


Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipios/create', [MunicipioController::class, 'create'])->name('municipios.create');
Route::delete('/municipios/{municipio}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');
Route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipios.edit');

//RUTAS DEPARTAMENTO

Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
Route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');

//RUTA PAIS

Route::get('/pais', [PaisController::class, 'index'])->name('pais.index');
Route::post('/pais', [PaisController::class, 'store'])->name('pais.store');
Route::get('/pais/create', [PaisController::class, 'create'])->name('pais.create');