<?php

namespace App\Http\Controllers;

use App\Models\TipoAula;
use App\Models\Aula;

use Illuminate\Http\Request;

class AulaController extends Controller{
    public function index(){
        return view('main.aulaList', [ 'aulas' => Aula::get()]);
    }

    public function create(){
        return view('main.aulaCreate', [ 'tipoAulas' => TipoAula::get()]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
            'capacidad' => 'required',
            'tipo_aula_id' => 'required'
        ]);

        $aula = new Aula;
        $aula->nombre = $request->nombre;
        $aula->ubicacion = $request->ubicacion;
        $aula->capacidad = $request->capacidad;
        $aula->tipo_aula_id = $request->tipo_aula_id;
        $aula->save();

        return redirect('aula');
    }

    public function edit($id){
        return view('main.aulaEdit', [
            'aula' => Aula::findOrFail($id),
            'tipoAulas' => TipoAula::get()
        ]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
            'capacidad' => 'required',
            'tipo_aula_id' => 'required'
        ]);

        $aula = Aula::find($request->id);
        $aula->nombre = $request->nombre;
        $aula->ubicacion = $request->ubicacion;
        $aula->capacidad = $request->capacidad;
        $aula->tipo_aula_id = $request->tipo_aula_id;
        $aula->save();

        return redirect('aula');
    }
}
