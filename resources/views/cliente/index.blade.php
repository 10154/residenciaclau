
@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h1>Listado de Clientes</h1>

@stop

@section('content')
<a href="clientes/create" class="btn btn-primary mb-4">CREAR</a>

<table id="clientes" class="table table-striped shadow-lg mt-6" style="width:100%">
  <thead class="bg-primary text-white">
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Empresa</th>
      <th scope="col">Email</th>
      <th scope="col">Direccion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->codigo}}</td>
        <td>{{$cliente->empresa}}</td>
        <td>{{$cliente->email}}</td>
        <td>{{$cliente->direccion}}</td>
        <td>


        <a href="{{route('clientes.show', $cliente->id) }}"class="btn btn-success"><i class="fas fa-eye"></i></a>
          <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
          <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger"><i class="fas fa-trash"></i></button>

       </td>
</tr>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar <span><span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
¿Seguro que deseas eliminar el registro selecionado?
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
        @csrf
              @method('DELETE')
        <button class="btn btn-danger btn-sm mt-1" type="submit">Eliminar</button>
         </form>
      </div>
    </div>
  </div>
</div>
@endforeach
</tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="styleshe">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>

var deleteModal = document.getElementById('deleteModal')
deleteModal.addEventListener('show.bs.modal', function (event){
  var button = event.relatedTarget

  var recipient = button.getAttribute('data-bs-id ')
  var modaltitle = deletemodal.querySelector('.modal-title')

  var modalBodyInput = deletemodal.querySelector('.modal-body input')

  //modal.find('.modal-title').text('New message to ' + recipient)
  //modal.find('.modal-body input').val(recipient)
})
</script>

<script>
    $(document).ready(function () {
    $('#clientes').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
});
</script>
<footer class="main-footer fixed-bottom">
                <!-- NO QUITAR -->
                <b> EMPRESA</b>
                <div class="float-right d-none d-sm-inline-block">
                    <b>MI WEB MI NEGOCIO</b>
                </div>
            </footer>

@stop
