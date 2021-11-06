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

        <form action="{{url('materia') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" >
            </div>
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input class="form-control" name="codigo" >
            </div>
            <div class="mb-3">
                <label class="form-label">Ciclo</label>
                <input class="form-control" name="ciclo" type="number" step="1" min="1" >
            </div>
            <select class="form-control m-b" name="facultad_id">
                @foreach ($carreras as $carrera)
                    <option value="{{ $carrera->id }}"> {{ $carrera->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection