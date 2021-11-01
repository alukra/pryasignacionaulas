<?php

namespace App\Http\Controllers;
use App\Models\TipoAula;

use Illuminate\Http\Request;

class TipoAulaController extends Controller{
    public function index(){
        return view('main.tipoAulaList', [ 'tipoAulas' => TipoAula::get()]);
    }

    public function create(){
        return view('main.tipoAulaCreate');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $tipoAula = new tipoAula;
        $tipoAula->nombre = $request->nombre;
        $tipoAula->descripcion = $request->descripcion;
        $tipoAula->save();

        return redirect('tipoaula');
    }

    public function edit($id){
        return view('main.tipoAulaEdit', ['tipoAula' => tipoAula::findOrFail($id)]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $tipoAula = tipoAula::find($request->id);
        $tipoAula->nombre = $request->nombre;
        $tipoAula->descripcion = $request->descripcion;
        $tipoAula->save();

        return redirect('tipoaula');
    }
}
