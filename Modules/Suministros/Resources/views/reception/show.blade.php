@extends('suministros::layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between m-4">
    <h1 class="h3 mb-4 text-gray-800">{{ __('Recibo de Insumos') }}</h1>
    <a href="{{ route('store.create', ['reception'=>$receptions->id]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white"></i></a>
    </div>

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

    <div class="card">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <div class="row">
            <div class="col-lg-4">Concepto: {{$receptions->concepto}}</div>
            <div class="col-lg-4">Tipo: {{$receptions->tipo}} </div>
            <div class="col-lg-4">Fecha: {{$receptions->fecha}} </div>
            <div class="col-lg-4">Nota: {{$receptions->nota}} </div>
            <div class="col-lg-4">Responsable: {{$receptions->responsable}} </div>
            <div class="col-lg-4">Proveedor: {{$receptions->proveedor}} </div>
            <div class="col-lg-4">Observación: {{$receptions->observacion}}</div>
        </div>
          </blockquote>
        </div>
      </div>
      <div>
        <table id="datatable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Proveedor</th>
                    <th>Caducidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($receptions->details as $r )
                @php
                
                <tr>
                    <th>{{$r->id}}</th>
                    <th>{{$r->supplies->nombre}}</th>
                    <th>{{$r->cantidad}}</th>
                    <th>{{$r->proveedor}}</th>
                    <th>{{$r->caducidad}}</th>
                    <th>
                        <form action="{{ route('reception.destroy', $receptions->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <!--button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button-->
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>
                    </th>
                </tr>
                @endforeach
                </tbody></table>
      </div>
    </div>

@endsection
