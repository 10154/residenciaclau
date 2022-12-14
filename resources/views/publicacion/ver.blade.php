@extends('adminlte::page')

@section('title', '$publicacion')

@section('content_header')
<h2>VER publicacion</h2>
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
                <h3 class="card-title">Detalle publicacion</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->

              <form action="/publicaciones/{{$publicacion->id}}" method="POST">
@csrf
    @method('PUT')
 <div class="card-body">
  <div class="mb-3">
  <br>
  <label></strong>Titilo:</strong>{{ $publicacion->titulo }}</label><br>
    <label><strong>Resumen:</strong> {{ $publicacion->resumen }}</label><br>
    <label><strong>Contenido:</strong> {{ $publicacion->contenido }}</label><br>
    <label><strong>Foto:</strong> {{ $publicacion->foto }}</label><br>

    <a href="{{ route('publicaciones.index') }}"class="btn  btn-success">Ver listado publicaciones</a>
    <a href="/publicaciones/{{$publicacion->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
    </div>
    </div>
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
