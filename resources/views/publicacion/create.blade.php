@extends('adminlte::page')

@section('title', 'publicaciones')

@section('content_header')
<h2>CREAR PUBLICACIONES</h2>
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
                <h3 class="card-title">Publicaciones</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


<form action="/publicaciones" method="POST">
@csrf

<div class="card-body">
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input type="text"  class="form-control" name="titulo" placeholder="titulo" value="{{ old('titulo') }}">
    @error('titulo')
    <p class="error-message">{{ $message }}</p>
     @enderror
    </div>
  <div class="mb-3">
    <label for="" class="form-label">Resumen</label>
    <input type="text" class="form-control" name="resumen" placeholder="resumen" value="{{ old('resumen') }}">
    @error('resumen')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Contenido</label>
    <input type="text" class="form-control" name="contenido" placeholder="contenido" value="{{ old('contenido') }}">
    @error('contenido')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Foto</label>
    <input type="file" class="form-control" name="foto" placeholder="foto" value="{{ old('foto') }}">
  </div>

  <a href="/publicaciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa fa-save"></i></button>
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
