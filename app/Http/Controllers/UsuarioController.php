<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\RolUsuario;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller{
    
    public function index(){
        return view('main.usuarioList', [ 'usuarios' => Usuario::select('usuarios.*', 'rol_usuarios.nombre as rol')
            ->join('rol_usuarios', 'rol_usuarios.id', 'usuarios.rol_id')
            ->get()]);
    }

    public function create(){
        return view('main.usuarioCreate', ['roles' => RolUsuario::get()] );
    }

    public function store(Request $request){

        $validated = $request->validate([
            'usuario' => 'required',
            'password' => 'required|confirmed',
            'correo' => 'required',
            'nombre' => 'required',
            'rol_id' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->usuario = $request->usuario;
        $usuario->password = Hash::make($request->password);
        $usuario->correo = $request->correo;
        $usuario->nombre = $request->nombre;
        $usuario->telefono = $request->telefono;
        $usuario->rol_id = $request->rol_id;
        $usuario->save();

        return redirect('usuario');
    }
    
    public function edit($id){
        return view('main.usuarioEdit', [
            'usuario' => Usuario::findOrFail($id),
            'roles' => RolUsuario::get()
        ]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'usuario' => 'required',
            'correo' => 'required',
            'nombre' => 'required',
            'rol_id' => 'required'
        ]);

        $usuario = Usuario::find($request->id);
        $usuario->usuario = $request->usuario;
        $usuario->correo = $request->correo;
        $usuario->nombre = $request->nombre;
        $usuario->telefono = $request->telefono;
        $usuario->rol_id = $request->rol_id;
        $usuario->save();

        return redirect('usuario');
    }

}
