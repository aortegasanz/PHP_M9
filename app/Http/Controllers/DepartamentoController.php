<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    //
    public function index ($pais) {
        return "Departamento (INDEX) Pais: $pais";
    }
    public function store ($pais) {
        return "Departamento (STORE) Pais: $pais";
    }
    public function show ($pais, $departamento) {
        return "Departamento (SHOW) Pais: $pais Departamento: $departamento";
    }
    public function update ($pais, $departamento) {
        return "Departamento (UPDATE) Pais: $pais Departamento: $departamento";
    }
    public function destroy ($pais, $departamento) {
        return "Departamento (DESTROY) Pais: $pais Departamento: $departamento";
    }
}
