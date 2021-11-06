<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Grupo;
use App\Models\HorarioAula;
use App\Models\ReservaAula;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    public function index(){
        return view('main.reserva', [
            'facultades' => Facultad::get(),
            'carreras' => Carrera::get(),
            'materias' => Materia::get(),
            'grupos' => Grupo::get(),
            'horario_aulas' => HorarioAula::get()
        ]);
    }

    public function store(Request $request){
        
        $reservaAula = new ReservaAula();
        $reservaAula->grupo_id = $request->grupo_id;
        $reservaAula->horario_aula = $request->horario_aula;
        $reservaAula->estado = 1;
        $reservaAula->save();

        return redirect("/");
    }
}
