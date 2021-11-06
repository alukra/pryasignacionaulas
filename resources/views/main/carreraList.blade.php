@extends('layout.layout')

@section('title', 'Carreras')

@section('cssExtra')
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
@show

@section('scriptExtra')
<script src="js/plugins/dataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
            $('.table').DataTable({
                pageLength: 25,
                responsive: true
            });
        });
</script>
@show

@section('main')
    <div class="ibox-content">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Facultad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carreras as $carrera)
                    <tr>
                        <td>{{ $carrera->codigo}}</td>
                        <td>{{ $carrera->nombre }}</td>
                        <td>{{ $carrera->facultad }}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('carrera/'. $carrera->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('carrera/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection