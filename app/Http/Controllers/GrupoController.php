<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function index(){
        return view('main.grupoList', [ 
            'grupos' => grupo::select('grupos.*', 'materias.nombre as materia', 'docentes.nombre as docente')
                ->join('docentes', 'docente_id', 'docentes.id')
                ->join('materias', 'materia_id', 'materias.id')
                ->get()
            ]);
    }

    public function create(){
        return view('main.grupoCreate', [ 
            'docentes' => Docente::get(),
            'materias' => Materia::get()
        ]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'materia_id' => 'required',
            'docente_id' => 'required'
        ]);

        $grupo = new grupo;
        $grupo->nombre = $request->nombre;
        $grupo->materia_id = $request->materia_id;
        $grupo->docente_id = $request->docente_id;
        $grupo->save();

        return redirect('grupo');
    }

    public function edit($id){
        return view('main.grupoEdit', [
            'grupo' => grupo::findOrFail($id),
            'docentes' => Docente::get(),
            'materias' => Materia::get()
        ]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'materia_id' => 'required',
            'docente_id' => 'required'
        ]);

        $grupo = grupo::find($request->id);
        $grupo->nombre = $request->nombre;
        $grupo->materia_id = $request->materia_id;
        $grupo->docente_id = $request->docente_id;
        $grupo->save();

        return redirect('grupo');
        
    }
}
