<?php

namespace App\Http\Controllers; // Corrige el espacio de nombres

use App\Http\Controllers\Controller; // Corrige el uso de la clase base del controlador
use Illuminate\Http\Request; // Corrige el espacio de nombres de Request

class CursoController extends Controller // Corrige el nombre de la clase
{
    public function index()
    {
        return "Bienvenido a la página de cursos";
    }

    public function create()
    {
        return "En esta página podrás crear cursos";
    }

    public function show($curso)
    {
        return "Bienvenido al curso $curso";
    }
}