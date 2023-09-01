@extends('suministros::layouts.admin')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Listado de Recibos') }}</h1>
<table id="datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>N°</th>
                <th>Concepto</th>
                <th>Tipo</th>
                <th>Fecha</th>
                <th>Nota</th>
                <th>Responsable</th>
                <th>Proovedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receptions as $r )
            <tr>
                <th>{{$r->id}}</th>
                <th>{{$r->concepto}}</th>
                <th>{{$r->tipo}}</th>
                <th>{{$r->fecha}}</th>
                <th>{{$r->nota}}</th>
                <th>{{$r->responsable}}</th>
                <th>{{$r->proveedor}}</th>
                <th><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
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
