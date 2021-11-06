@extends('layout.layout')

@section('title', 'Asignacion de aulas')

@section('cssExtra')
<link href="{{ asset('css/plugins/fullcalendar/fullcalendar.css')}} " rel="stylesheet">
<link href="{{ asset('css/plugins/fullcalendar/fullcalendar.print.css') }}" rel='stylesheet' media='print'>
@show

@section('scriptExtra')
    <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/plugins/fullcalendar/moment.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    <script>

        $(document).ready(function() {
            $('#external-events div.external-event').each(function() {
                // store data so the calendar knows to render an event upon drop
                $(this).data('event', {
                    title: $.trim($(this).text()), // use the element's text as the event title
                    stick: true // maintain when user navigates (see docs on the renderEvent method)
                });
            });
    
            /* initialize the calendar
             -----------------------------------------------------------------*/
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
    
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'agendaWeek, month'
                },
                editable: false,
                droppable: false,
                events: [
                    @foreach ($reservas as $reserva)
                    {
                        title: '{{ $reserva->nombre }}  {{ $reserva->materia}} ',
                        start: new Date(y, m, {{ $reserva->dia }})
                    },
                    @endForeach
                ]
            });
        });
    
    </script>
@show

@section('main')
    <div class="ibox-content">
        <div id="calendar"></div>
    </div>
@endsection