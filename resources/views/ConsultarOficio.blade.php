@extends('app')

@section('titulo')
    <h1>Página en blanco</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Oficio</li>
@stop

@section('contenido')
    Hola mundo en laravel
@stop
