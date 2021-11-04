<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller{
    
    public function index(){
        return view('main.docenteList', [ 'docentes' => Docente::get()]);
    }

    public function create(){
        return view('main.docenteCreate');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'dni' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'direccion' => 'required'
        ]);

        $docente = new docente;
        $docente->nombre = $request->nombre;
        $docente->dni = $request->dni;
        $docente->telefono = $request->telefono;
        $docente->email = $request->email;
        $docente->direccion = $request->direccion;
        $docente->save();

        return redirect('docente');
    }

    public function edit($id){
        return view('main.docenteEdit', ['docente' => docente::findOrFail($id)]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'dni' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'direccion' => 'required'
        ]);

        $docente = docente::find($request->id);
        $docente->nombre = $request->nombre;
        $docente->dni = $request->dni;
        $docente->telefono = $request->telefono;
        $docente->email = $request->email;
        $docente->direccion = $request->direccion;
        $docente->save();

        return redirect('docente');
        
    }

}
