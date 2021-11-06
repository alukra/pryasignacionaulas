@extends('layout.layout')

@section('title', 'carreras')

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

        <form action="{{url('carrera/'. $carrera->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $carrera->id }}" />
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="{{ $carrera->nombre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input class="form-control" name="codigo" value="{{ $carrera->codigo }}" >
            </div>
            <select class="form-control m-b" name="facultad_id">
                @foreach ($facultades as $facultad)
                    <option value="{{ $facultad->id }}" @if($facultad->id == $carrera->facultad_id) selected @endif> {{ $facultad->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection