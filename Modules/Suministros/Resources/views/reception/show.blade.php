@extends('suministros::layouts.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Recibo de Articulos') }}</h1>

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
            Concepto: {{$receptions->concepto}} <br>
            Tipo: {{$receptions->tipo}} <br>
            Fecha: {{$receptions->fecha}} <br>
            Nota: {{$receptions->nota}} <br>
            Responsable: {{$receptions->responsable}} <br>
            Proveedor: {{$receptions->proveedor}} <br>
            Observación: {{$receptions->observacion}}
            
          </blockquote>
        </div>
      </div>

    </div>

@endsection
