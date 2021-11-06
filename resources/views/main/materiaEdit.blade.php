@extends('layout.layout')

@section('title', 'Materias')

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

        <form action="{{url('materia/'. $materia->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $materia->id }}" />
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="{{ $materia->nombre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input class="form-control" name="codigo" value="{{ $materia->codigo }}" >
            </div>
            <div class="mb-3">
                <label class="form-label">Ciclo</label>
                <input class="form-control" name="ciclo" type="number" step="1" min="1" value="{{ $materia->ciclo }}">
            </div>
            <select class="form-control m-b" name="facultad_id">
                @foreach ($carreras as $carrera)
                    <option value="{{ $carrera->id }}" @if($carrera->id == $materia->carrera_id) selected @endif> {{ $carrera->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection