@extends('adminlte::page')

@section('title', 'cliente')

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



<form action="/clientes/{{$cliente->id}}" method="POST">
@csrf
    @method('PUT')
 <div class="card-body">
  <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$cliente->codigo}}">
    @error('codigo')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input id="empresa" name="empresa" type="text" class="form-control" value="{{$cliente->empresa}}">
    @error('empresa')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$cliente->email}}">
    @error('email')
    <p class="error-message">{{ $message }}</p>
     @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$cliente->direccion}}">
    @error('direccion')
    <p class="error-message">{{ $message }}</p>
     @enderror

  </div>
  <a href="/clientes" class="btn btn-secondary"tabindex="4">Cancelar</a>
  <button type="submit"  class="btn btn-success swalDefaultSuccess" tabindex="4" ><i class="fa fa-save"></i></button>
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
