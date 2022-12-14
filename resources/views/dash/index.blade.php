@extends('adminlte::page')

@section('title', 'dash')

@section('content_header')
<h2></h2>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Dashboard/Bienvenido Administrador del Sistema</div>

                <div class="card-body">
                    <div class="container">
                        <!-- Main content -->
                        <section class="content">
                          <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">

                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>100</h3>
                                    <p>Clientes</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-bag"></i>
                                  </div>
                                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>

                              <!-- ./col -->
                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                  <div class="inner">
                                    <h3>160</h3>
                                    <p>Publicaciones</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                  </div>
                                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>

                              <!-- ./col -->
                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-navy">
                                  <div class="inner">
                                    <h3>1</h3>
                                    <p>Calendario</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                  </div>
                                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                              <!-- ./col -->

                            </div>
                            <!-- /.row -->


                          </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                    </div>


                </div>
            </div>
        </div>
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
