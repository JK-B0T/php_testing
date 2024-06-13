<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("index");
    }

    public function index2() {
        return redirect()->route('index', ['error' => 'user_exists']);
    }

    public function cambio_pass() {
        return view("paginas.cambio_pass");
    }

    public function enviar_mail() {
        return view("paginas.enviar_mail");
    }

    public function informe() {
        return view("paginas.informe");
    }

    public function login() {
        return view("paginas.login");
    }

    public function cambiar_pass() {
        return view("php.cambiar_pass");
    }

    public function generacion_informe() {
        return view("php.generacion_informe");
    }

    public function logear_usuario() {
        return view("php.logear_usuario");
    }

    public function recuperar_pass() {
        return view("php.recuperar_pass");
    }

    public function registrar_usuario() {
        return view("php.registrar_usuario");
    }

    public function seleccionar_informe() {
        return view("php.seleccionar_informe");
    }
}
