<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function index(){
        return view('main.carreraList', [ 
            'carreras' => Carrera::select('carreras.*', 'facultades.nombre as facultad')
                ->join('facultades', 'facultad_id', 'facultades.id')
                ->get()
            ]);
    }

    public function create(){
        return view('main.carreraCreate', [ 'facultades' => Facultad::get() ]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'facultad_id' => 'required'
        ]);

        $carrera = new carrera;
        $carrera->nombre = $request->nombre;
        $carrera->codigo = $request->codigo;
        $carrera->facultad_id = $request->facultad_id;
        $carrera->save();

        return redirect('carrera');
    }

    public function edit($id){
        return view('main.carreraEdit', [
            'carrera' => Carrera::findOrFail($id),
            'facultades' => Facultad::get()
        ]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'facultad_id' => 'required'
        ]);

        $carrera = Carrera::find($request->id);
        $carrera->nombre = $request->nombre;
        $carrera->codigo = $request->codigo;
        $carrera->facultad_id = $request->facultad_id;
        $carrera->save();

        return redirect('carrera');
        
    }
}
