@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>CREAR REGISTROS DE CLIENTES</h2>
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


<form action="/clientes" method="POST">
@csrf
<div class="card-body">
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input type="text"  class="form-control" name="codigo" placeholder="Codigo" value="{{ old('codigo') }}">
    @error('codigo')
    <p class="error-message">{{ $message }}</p>
     @enderror
    </div>
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input type="text" class="form-control" name="empresa" placeholder="Empresa" value="{{ old('empresa') }}">
    @error('empresa')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="{{ old('direccion') }}">
    @error('direccion')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>

  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
