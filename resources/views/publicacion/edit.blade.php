@extends('adminlte::page')

@section('title', 'publicaciones')

@section('content_header')
<h2>EDITAR REGISTROS</h2>
@stop

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cliente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

<form action="/publicaciones/{{$publicacion->id}}" method="POST">
@csrf
    @method('PUT')
    <div class="card-body">

  <div class="mb-3">
    <label for="" class="form-label">titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" value="{{$publicacion->titulo}}">
    @error('titulo')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">resumen</label>
    <input id="resumen" name="resumen" type="text" class="form-control" value="{{$publicacion->resumen}}">
    @error('resumen')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">contenido</label>
    <input id="contenido" name="contenido" type="text" class="form-control" value="{{$publicacion->contenido}}">
    @error('contenido')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">foto</label>
    <input id="foto" name="foto" type="text" class="form-control" value="{{$publicacion->foto}}">
    @error('foto')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>

  <a href="/publicaciones" class="btn btn-secondary"tabindex="4">Cancelar</a>
  <button type="submit"  class="btn btn-success swalDefaultSuccess" tabindex="4" ><i class="fa fa-save"></i></button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<footer class="main-footer fixed-bottom">
                <!-- NO QUITAR -->
                <b> EMPRESA</b>
                <div class="float-right d-none d-sm-inline-block">
                    <b>MI WEB MI NEGOCIO</b>
                </div>
            </footer>
@stop
