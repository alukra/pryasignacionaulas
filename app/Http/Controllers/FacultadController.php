<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;

class FacultadController extends Controller
{
    public function index(){
        return view('main.facultadList', [ 'facultades' => Facultad::get()]);
    }

    public function create(){
        return view('main.facultadCreate');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required'
        ]);

        $facultad = new Facultad;
        $facultad->nombre = $request->nombre;
        $facultad->codigo = $request->codigo;
        $facultad->save();

        return redirect('facultad');
    }

    public function edit($id){
        return view('main.facultadEdit', ['facultad' => Facultad::findOrFail($id)]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required'
        ]);

        $facultad = Facultad::find($request->id);
        $facultad->nombre = $request->nombre;
        $facultad->codigo = $request->codigo;
        $facultad->save();

        return redirect('facultad');
        
    }
}
