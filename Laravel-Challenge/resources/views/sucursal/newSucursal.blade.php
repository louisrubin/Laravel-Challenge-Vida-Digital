@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Registrar Sucursal
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Registrar una Sucursal
@endsection


@section('content')
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Sucursal') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('createSucursal') }}">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Nombre de la Sucursal') }}</label>

                                <div class="col-md-6">
                                    <input name="nombre_sucur"  type="text" class="form-control" required >

                                    @error('nombre_emp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Dirección Comercial') }}</label>

                                <div class="col-md-6">
                                    <input id="direc_comerc" name="direc_comerc" type="text"  class="form-control" required >

                                    @error('direc_comerc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>

                                <div class="col-md-6">
                                    <input name="telefono" type="text" class="form-control" required>

                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input name="email" type="email" class="form-control" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            
                            <div class="row mb-3">
                                <label for="ID_empresa1" class="col-md-4 col-form-label text-md-end">{{ __('Empresa Perteneciente') }}</label>

                                <div class="col-md-6">
                                    <select name="ID_empresa1" class="form-control" >

                                        <option value="" class="@error('ID_empresa1') is-invalid @enderror" >Seleccionar</option>
                                        
                                        @foreach ($empresas as $item)
                                            <option value="{{ $item->ID_empresa }}">{{ $item->nombre_emp }}</option>
                                        @endforeach
                                        
                                        @error('ID_empresa1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>


                                </div>
                            </div>

                            

                            {{-- SUBMIT BUTTON  --}}
                            <div class="row mb-0 ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Registrar Sucursal') }}
                                    </button>
                                </div>
                            </div>

                        </form>


                        {{-- BACK TO MENU --}}
                        <a href="{{ route('home') }}" >
                            <button class="btn btn-dark btn-sm mt-3 ">Inicio</button>
                        </a>

                    </div>
            </div>
        </div>
    </div>
</div>



@endsection