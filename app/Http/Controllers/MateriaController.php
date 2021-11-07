<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function index(){
        return view('main.materiaList', [ 
            'materias' => Materia::select('materias.*', 'carreras.nombre as carrera')
                ->join('carreras', 'carreras.id', 'materias.carrera_id')
                ->get()
            ]);
    }

    public function create(){
        return view('main.materiaCreate', [ 'carreras' => Carrera::get() ]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'ciclo' => 'required',
            'carrera_id' => 'required'
        ]);

        $materia = new materia;
        $materia->nombre = $request->nombre;
        $materia->codigo = $request->codigo;
        $materia->ciclo = $request->ciclo;
        $materia->carrera_id = $request->carrera_id;
        $materia->save();

        return redirect('materia');
    }

    public function edit($id){
        return view('main.materiaEdit', [
            'materia' => materia::findOrFail($id),
            'carreras' => Carrera::get()
        ]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'ciclo' => 'required',
            'carrera_id' => 'required'
        ]);

        $materia = materia::find($request->id);
        $materia->nombre = $request->nombre;
        $materia->codigo = $request->codigo;
        $materia->ciclo = $request->ciclo;
        $materia->carrera_id = $request->carrera_id;
        $materia->save();

        return redirect('materia');
        
    }
}
