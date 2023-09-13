@extends('suministros::layouts.admin')

@section('content')
@php
if (isset($_GET['reception'])){
$reception=$_GET['reception'];
}
@endphp
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registros de Articulo del Recibo N°').$reception}}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

               
                <div class="card-body">

                    <form method="POST" action="{{ route('store.store') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                        <div class="pl-lg-4">
                            <div class="row">
                                <input type="hidden" id="concepto" class="form-control" name="reception" placeholder="" value="{{ $reception}}">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Codigo<span class="small text-danger">*</span></label>
                                        <input type="text" id="codigo" class="form-control" name="codigo" placeholder="" value="{{ old('codigo')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="concepto">Cantidad<span class="small text-danger">*</span></label>
                                        <input type="number" id="concepto" class="form-control" name="cantidad" placeholder="" value="{{ old('cantidad')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="concepto">Descripción<span class="small text-danger">*</span></label>
                                        <select class="form-control" aria-label="Default select example" name="nombre" id="nombre">
                                        @php
                                        $supplies=DB::table('supplies')->get();
                                        foreach($supplies as $s){
                                            print('<option value="'.$s->id.'">'.$s->nombre.'-'.$s->principio.'-'.$s->unidades.'-'.$s->presentacion.'-'.$s->formula.'-'.$s->laboratorio.'</option>');
                                        }
                                        @endphp
                                        </select>
                                    </div>
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="concepto">Caducidad<span class="small text-danger">*</span></label>
                                        <input type="date" id="concepto" class="form-control" name="caducidad" placeholder="" value="{{ old('caducidad')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="concepto">Lote<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="lote" placeholder="" value="{{ old('lote')}}">
                                    </div>
                                </div>
                
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="concepto">Almacen<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="almacen" placeholder="" value="Suministros" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="concepto">Estante<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="estante" placeholder="" value="{{ old('estante')}}">
                                    </div>
                                </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="concepto">Indice<span class="small text-danger">*</span></label>
                                    <input type="text" id="concepto" class="form-control" name="indice" placeholder="" value="{{ old('indice')}}">
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="button" class="btn btn-danger m-5"  onClick="history.back()">Volver</button><button type="submit" class="btn btn-primary">Continuar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
@section('js')
<script>
    $('#codigo').on('change',function(e){
            var brand_id =  e.target.value;
            $.ajax({
                type: "GET",
                url: " {{ route('details') }}",
                data: {

                    'checking_viewbtn': true,
                    'codigo': brand_id,
                },
                //success: function(response){


                success: function(data) {
                    var html = '';
                    var details = data.details;
                    if (details.length > 0) {
                $('#nombre').empty();
                $('#nombre').append('<option value="'+ details.id +'">'+ details.nombre +'</option>');
    }}});
        });
</script>
@endsection
