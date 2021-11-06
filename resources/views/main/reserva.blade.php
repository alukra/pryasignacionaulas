@extends('layout.layout')

@section('title', 'Reserva')

@section('main')
    <div class="ibox-content">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{url('reservar') }}" method="POST">
            @csrf
            <label class="form-label">Facultad</label>
            <select class="form-control m-b" name="facultad_id">
                    <option value="#" selected disabled>Seleccione</option>
                @foreach ($facultades as $facultad)
                    <option value="{{ $facultad->id }}"> {{ $facultad->nombre}}</option>
                @endforeach
            </select>

            <label class="form-label">Carrera</label>
            <select class="form-control m-b" name="carrera_id">
                <option value="#" selected disabled>Seleccione</option>
                @foreach ($carreras as $carrera)
                    <option value="{{ $carrera->id }}"> {{ $carrera->nombre}}</option>
                @endforeach
            </select>


            <label class="form-label">Materia</label>
            <select class="form-control m-b" name="materia_id">
                <option value="#" selected disabled>Seleccione</option>
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}"> {{ $materia->nombre}}</option>
                @endforeach
            </select>

            <label class="form-label">Grupo</label>
            <select class="form-control m-b" name="grupo_id">
                <option value="#" selected disabled>Seleccione</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id }}"> {{ $grupo->nombre}}</option>
                @endforeach
            </select>

            <label class="form-label">Horario de aulas</label>
            <select class="form-control m-b" name="horario_aula">
                <option value="#" selected disabled>Seleccione</option>
                @foreach ($horario_aulas as $horario_aula)
                    <option value="{{ $horario_aula->id }}">Dia: {{ $horario_aula->dia }} {{ $horario_aula->horario_inicio}} - {{ $horario_aula->horario_fin}}</option>
                @endforeach
            </select>
        
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection