<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }
    public function getById($id)
    {
        return Usuario::find($id);
    }
}
