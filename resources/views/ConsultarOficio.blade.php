@extends('app')

@section('titulo')
    <h1>Consultar Oficios </h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Oficios</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Lugar</th>
                    <th>Fecha</th>
                    <th>Cuerpo</th>
                    <th>Asunto</th>
                    <th>Ver Pdf</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($oficios as $o)
                    <tr>
                        <td>{{ $o->folio }}</td>
                        <td>{{ $o->lugar }}</td>
                        <td>{{ $o->fecha }}</td>
                        <td>{{ $o->cuerpo }}</td>
                        <td>{{ $o->asunto }}</td>
                        <td> <a href="{{ asset('pdf') }}/{{ $o->id.'.pdf' }}"> PDF </a> </td>

                    </tr>


                @endforeach
            </tbody>
        </table>
    </div>
@stop
