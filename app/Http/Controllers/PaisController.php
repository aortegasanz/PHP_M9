<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    //
    public function index () {
        return "País (INDEX)";
    }
    public function store () {
        return "País (STORE)";
    }
    public function show ($pais) {
        return "País (SHOW): $pais";
    }
    public function update ($pais) {
        return "País (UPDATE): $pais";
    }
    public function destroy ($pais) {
        return "País (DESTROY): $pais";
    }
}
