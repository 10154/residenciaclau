@extends('adminlte::page')

@section('title', 'cliente')

@section('content_header')
<h2>VER REGISTROS</h2>
@stop

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detalle cliente</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->

              <form action="/clientes/{{$cliente->id}}" method="POST">
@csrf
    @method('PUT')
 <div class="card-body">
  <div class="mb-3">
  <br>
    <label></strong>Codigo:</strong>{{ $cliente->codigo }}</label><br>
    <label><strong>Empresa:</strong> {{ $cliente->empresa }}</label><br>
    <label><strong>Email:</strong> {{ $cliente->email }}</label><br>
    <label><strong>Direccion:</strong> {{ $cliente->direccion }}</label><br>

    <a href="{{ route('clientes.index') }}"class="btn  btn-success">Ver listado clientes</a>
    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
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
