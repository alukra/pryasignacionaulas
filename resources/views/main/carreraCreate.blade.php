@extends('layout.layout')

@section('title', 'Carreras')

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

        <form action="{{url('carrera') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" >
            </div>
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input class="form-control" name="codigo" >
            </div>
            <select class="form-control m-b" name="facultad_id">
                @foreach ($facultades as $facultad)
                    <option value="{{ $facultad->id }}"> {{ $facultad->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection