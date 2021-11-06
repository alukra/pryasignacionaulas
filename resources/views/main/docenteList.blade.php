@extends('layout.layout')

@section('title', 'Docentes')

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
                    <th>nombre</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <td>{{ $docente->nombre}}</td>
                        <td>{{ $docente->email}}</td>
                        <td>{{ $docente->telefono}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('docente/'. $docente->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('docente/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection