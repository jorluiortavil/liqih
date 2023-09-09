@extends('suministros::layouts.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registros de Medicamentos') }}</h1>

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

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

               
                <div class="card-body">

                    <form method="POST" action="{{ route('store.store') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Codigo<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="codigo" placeholder="" value="{{ $reception}}">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Nombre<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="nombre" placeholder="" value="{{ old('nombre')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Principio Activo<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="principio" placeholder="" value="{{ old('principio')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Unidades<span class="small text-danger"></span></label>
                                        <input type="number" id="concepto" class="form-control" name="unidades" placeholder="" value="{{ old('nnota')}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="">Presentación<span class="small text-danger">*</span></label>
                                        <select class="form-control" aria-label="Default select example" name="presentacion">
                                            <option selected>Selecconar..</option>
                                            <option value="Tabletas">Tableta</option>
                                            <option value="Capsulas">Capsula</option>
                                            <option value="Capsulas">Gragea</option>
                                            <option value="Jarabe">Jarabe</option>
                                            <option value="Suspensión">Suspensión</option>
                                            <option value="Solución">Solución</option>
                                            <option value="Ampolla">Ampolla</option>
                                            <option value="Gel">Gel</option>
                                            <option value="Pomada">Pomada</option>
                                            <option value="Polvo">Polvo</option>
                                            <option value="Granulado">Granulado</option>
                                            <option value="Supositorio">Supositorio</option>
                                            <option value="Ovulos">Ovulo</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Formula<span class="small text-danger"></span></label>
                                        <input type="text" id="concepto" class="form-control" name="formula" placeholder="" value="{{ old('dosificación')}}">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Administracion<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="administración" placeholder="" value="{{ old('administración')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="concepto">Laboratorio<span class="small text-danger">*</span></label>
                                        <input type="text" id="concepto" class="form-control" name="laboratorio" placeholder="" value="{{ old('laboratorio')}}">
                                    </div>
                                </div>
                
                            </div>
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="concepto">Farmacopedia<span class="small text-danger">*</span></label>
                                    <input type="text" id="concepto" class="form-control" name="farmacopedia" placeholder="" value="{{ old('observacion')}}">
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
