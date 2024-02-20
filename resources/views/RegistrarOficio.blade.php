@extends('app')

@section('titulo')
    <h1>Registrar Oficios
    </h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Blank page</li>
@stop

@section('contenido')

<form method="POST" action="{{ url('/GuardarOficio') }}">
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Folio del oficio</label>
      <input name="folio" required type="text" class="form-control" id="formGroupExampleInput" placeholder="Escribe el folio">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Lugar</label>
      <input name="lugar" required type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escribe el lugar">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Cuerpo del oficio</label>
        <input name="cuerpo" required type="text" class="form-control" id="formGroupExampleInput" placeholder="Redacta el cuerpo del oficio">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Asunto</label>
        <input name="asunto" required type="text" class="form-control" id="formGroupExampleInput2" placeholder="Redacta tu asunto">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Foto de la firma</label>
        <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Selecciona un archivo">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Oficio pdf</label>
        <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Selecciona un archivo">
      </div>
            <a href="">
            <button type="submit" class="btn btn-primary btn-lg">Publicar</button>

            <a href="{{url('/home')}}" class="btn btn-secondary btn-lg">Cancelar</a>
  </form>
@stop
