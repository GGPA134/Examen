<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function RegistrarUsuario(Request $request){        
            $validate = $request->validate([
            'nombre' => 'required|max:255',
            'paterno' => 'required|max:255',
            'materno' => 'required|max:255',    
            'login' => 'required|max:255',
            'password' => 'required|max:255',
            'activo' => 'required|max:255',
        ]);
    $usuario->nombre = $request->nombre;
    $usuario->paterno = $request->paterno;
    $usuario->materno = $request->materno;
    $usuario->login = $request->login;
    $usuario->password = $request->password;
    $usuario->activo = 1;
    $usuario->save();
    return response()->json(['message' => 'Usuario Guardado correctamente'], 200);    
    }    
}
