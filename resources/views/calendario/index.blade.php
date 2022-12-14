@extends('adminlte::page')

@section('title', 'calendarios')

@section('content_header')
<center>
    <h1>CALENDARIO DE PUBLICACIONES</h1>
</center>
@stop
@section('content')
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">

    <!-- Bootstrap js v5.2.1 -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
</head>

<body>
<meta charset='utf-8' />
    <div class="col-md-8 offset-md-2">

  <header>
  <div id='calendar'>
</div>
  <!--  Modal trigger button
  <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalEvento">
    Launch
  </button>-->

  <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Datos del evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">

                <form action="" method="post">

<div class="mb-3 visually-hidden ">
  <label for="id" class="form-label">ID:</label>
  <input type="text"
    class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
</div>

<div class="mb-3">
  <label for="titulo" class="form-label">Título</label>
  <input type="text"
    class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Título">
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
</div>

<div class="mb-3">
  <label for="color" class="form-label">Color:</label>
  <input type="color"
    class="form-control" name="color" id="color" aria-describedby="helpId" placeholder="Color:">
</div>

<div class="mb-3 ">
  <label for="" class="form-label">Fecha:</label>
  <input type="text"
    class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha:">
</div>

<div class="mb-3">
                <label for="hora" class="form-label">Hora del evento:</label>
                <input type="time"
                  class="form-control" name="hora" id="hora" aria-describedby="helpId" placeholder="Hora:">

              </div>

</div>
          </div>
          <div class="modal-footer">
          <button  id="btnAgregar" class="btn btn-success">Agregar</button>
          <button  id="btnModificar" class="btn btn-warning">Modificar</button>
          <button  id="btnBorrar" class="btn btn-danger">Borrar</button>
          <button  id="btnCancelar" class="btn btn-info">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

   <script>
var modalEvento;
modalEvento= new bootstrap.Modal( document.getElementById('modalEvento'),{ keyboard:false } );
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:"es",
    headerToolbar:{
            left:'prev,next today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
    },
    dateClick:function(informacion){
      //alert("Presionaste "+informacion.dateStr);
      modalEvento.show();

    },



  });
  calendar.render();
});

</script>

<footer class="main-footer fixed-bottom">
                <!-- NO QUITAR -->
                <b> EMPRESA</b>
                <div class="float-right d-none d-sm-inline-block">
                    <b>MI WEB MI NEGOCIO</b>
                </div>
            </footer>

</body>

</html>
@stop
