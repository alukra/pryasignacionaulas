<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HorarioAula;
use App\Models\ReservaAula;

class LandingController extends Controller{

    public function index(){

        $reserva = ReservaAula::select('grupos.nombre', 'horario_aulas.horario_inicio', 'horario_aulas.horario_fin', 'dia', 'materias.nombre as materia')
            ->join('horario_aulas', 'horario_aulas.id', 'reserva_aulas.horario_aula')
            ->join('grupos', 'grupos.id', 'reserva_aulas.grupo_id')
            ->join('materias', 'materias.id', 'grupos.materia_id')
            ->get();
        return view('landing.index', [ 'reservas' => $reserva]);
    }
}