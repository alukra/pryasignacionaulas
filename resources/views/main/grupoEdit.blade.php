@extends('layout.layout')

@section('title', 'Grupo')

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

        <form action="{{url('grupo/'. $grupo->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $grupo->id }}" />
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre"  value="{{ $grupo->nombre }}">
            </div>
            <select class="form-control m-b" name="materia_id">
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}" @if($materia->id == $grupo->materia_id) selected @endif> {{ $materia->nombre}}</option>
                @endforeach
            </select>
            <select class="form-control m-b" name="docente_id">
                @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}" @if($docente->id == $grupo->docente_id) selected @endif> {{ $docente->nombre}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection