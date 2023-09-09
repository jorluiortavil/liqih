@extends('suministros::layouts.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-4 text-gray-800">{{ __('Listado de Articulos') }}</h1>
<a href="medicine" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-pills fa-sm text-white"></i></a>
</div>
<table id="datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>N°</th>
                <th>Codigo</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Caducidad</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $a )
            <tr>
                <th>{{$a->id}}</th>
                <th>{{$a->codigo}}</th>
                <th>{{$a->tipo}}</th>
                <th>{{$a->nombre}}</th>
                <th>{{$a->cantidad}}</th>
                <th>{{$a->proveedor}}</th>
                <th>{{$a->caducidad}}</th>
                <th>{{$a->ubicación}}</th>
                <th>
                    <form action="{{ route('reception.destroy', $a->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="reception/{{$a->id}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                        <!--button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button-->
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                  </form>
                </th>
            </tr>
            @endforeach
            </tbody></table></div>        
@endsection
@section('js')
<script> 
$(document).ready(function() {
    $('#datatable').dataTable( {
        "language": {
            "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 de 0 entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
        },dom: 'Bfrtip',
    buttons: [
        'copy', 'excel', 'pdf'
    ]
    } );
} );
</script>
@endsection
