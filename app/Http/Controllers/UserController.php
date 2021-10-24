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


    //Para que funcione el formulario
    public function userform(){
        return view('usuarios.userform');
    }

    //Para guardar usuarios
    public function save(Request $request)
    {
        $validator = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:usuarios'
        ]);

        $userdata = request()->except('_token');
        Usuario::insert($userdata);

        return back()->with('usuarioGuardado', 'Usuario Guardado');
    }

    //Para eliminar usuarios
    public function delete($id){
        Usuario::destroy($id);

        return back()->with('usuarioEliminado', 'Usuario eliminado');
    }

    //Formulario para editar usuarios
    public function editform($id){

        $usuario = Usuario::findOrFail($id);

        return view('usuarios.editform', compact('usuario'));
    }

    //Edición de usuarios
    public function edit(Request $request, $id){
        $datosUsuario = request()->except((['_token', '_method']));
        Usuario::where('id', '=', $id)->update($datosUsuario);

        return back()->with('usuarioModificado','Usuario Modificado');
    }
}
