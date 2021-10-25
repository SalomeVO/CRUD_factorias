<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //para que funcione la vista lista
    public function lista(){

        $data['users'] = Usuario::paginate(5);

        return view('usuarios.lista', $data);
    }

    //Para eliminar usuarios
    public function delete($id){
        Usuario::destroy($id);

        return back()->with('usuarioEliminado', 'Usuario eliminado');
    }

}
