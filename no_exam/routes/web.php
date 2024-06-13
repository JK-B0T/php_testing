<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/redirect', [HomeController::class, 'index2'])->name('index2');

Route::get('/cambio_pass', [HomeController::class, 'cambio_pass'])->name("cambio_pass");
Route::get('/enviar_mail', [HomeController::class, 'enviar_mail'])->name("enviar_mail");
Route::get('/informe', [HomeController::class, 'informe'])->name("informe");
Route::get('/login', [HomeController::class, 'login'])->name("login");

Route::get('/cambiar_pass', [HomeController::class, 'cambiar_pass'])->name("cambiar_pass");
Route::post('/generacion_informe', [HomeController::class, 'generacion_informe'])->name("generacion_informe");
Route::post('/logear_usuario', [HomeController::class, 'logear_usuario'])->name("logear_usuario");
Route::get('/recuperar_pass', [HomeController::class, 'recuperar_pass'])->name("recuperar_pass");
Route::post('/registrar_usuario', [HomeController::class, 'registrar_usuario'])->name("registrar_usuario");
Route::get('/seleccionar_informe', [HomeController::class, 'seleccionar_informe'])->name("seleccionar_informe");