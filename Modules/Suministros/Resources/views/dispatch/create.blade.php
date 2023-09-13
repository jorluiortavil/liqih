@extends('suministros::layouts.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 m-4 text-gray-800">{{ __('Despacho de Suministros') }}</h1>

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

                    <form method="POST" action="{{ route('dispatch.store') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Concepto<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="concepto" placeholder="" value="{{ old('concepto')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="">Tipo<span class="small text-danger">*</span></label>
                                        <select class="form-control" aria-label="Default select example" name="tipo">
                                            <option selected>Selecconar..</option>
                                            <option value="Asignacion">Asignacion</option>
                                            <option value="Donación">Donación</option>
                                            <option value="Devolución">Devolución</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="fecha">Fecha<span class="small text-danger">*</span></label>
                                        <input type="date" id="fecha" class="form-control" name="fecha" placeholder="" value="@php echo date("Y-m-d"); @endphp">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Responsable<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="responsable" placeholder="" value="{{ Auth::user()->name}}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Beneficiario<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="beneficiario" placeholder="" value="{{ old('proveedor')}}">
                                    </div>
                                </div>
                
                            </div>
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="concepto">Observación<span class="small text-danger">*</span></label>
                                    <input type="text" id="concepto" class="form-control" name="observacion" placeholder="" value="{{ old('observacion')}}">
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Continuar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
