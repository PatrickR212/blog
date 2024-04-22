<?php

namespace App\Http\Controllers; // Corregido el espacio de nombres

use App\Http\Controllers\Controller; // Corregido el nombre de la clase base
use Illuminate\Http\Request; // Corregido el espacio de nombres de Request

class HomeController extends Controller // Corregido el nombre de la clase
{
    public function __invoke() // Corregido el nombre del método mágico
    {
        return "Bienvenido al curso de Laravel"; // Corregida la sintaxis del return
    }
}