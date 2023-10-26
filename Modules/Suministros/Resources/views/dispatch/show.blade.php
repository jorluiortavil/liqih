@extends('suministros::layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between m-4">
    <h1 class="h3 mb-4 text-gray-800">{{ __('Despacho de Insumos') }}</h1>
    <a href="{{ route('dispatch.edit', ['dispatch'=>$dispatch->id]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
            <div class="col-lg-4">Concepto: {{$dispatch->concepto}}</div>
            <div class="col-lg-4">Tipo: {{$dispatch->tipo}} </div>
            <div class="col-lg-4">Fecha: {{$dispatch->fecha}} </div>
            <div class="col-lg-4">Nota: {{$dispatch->nota}} </div>
            <div class="col-lg-4">Responsable: {{$dispatch->responsable}} </div>
            <div class="col-lg-4">Proveedor: {{$dispatch->proveedor}} </div>
            <div class="col-lg-4">Observación: {{$dispatch->observacion}}</div>
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
                @foreach ($dispatch->details as $d )
                @php
                
                <tr>
                    <th>{{$d->id}}</th>
                    <th>{{$d->supplies->nombre}}</th>
                    <th>{{$d->cantidad}}</th>
                    <th>{{$d->proveedor}}</th>
                    <th>{{$d->caducidad}}</th>
                    <th>
                        <form action="{{ route('reception.destroy', $dispatch->id) }}" method="POST">
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
