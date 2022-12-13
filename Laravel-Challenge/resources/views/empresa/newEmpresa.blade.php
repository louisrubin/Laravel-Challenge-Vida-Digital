@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Registrar Empresa
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Registrar una Empresa
@endsection


@section('content')
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Empresa') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('createEmpresa') }}">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Nombre de la Empresa') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre_emp" name="nombre_emp"  type="text" class="form-control @error('nombre_emp') is-invalid @enderror" required >

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
                                    <input id="direc_comerc" name="direc_comerc" type="text"  class="form-control @error('direc_comerc') is-invalid @enderror" required >

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
                                    <input id="telefono" name="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" required>

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
                                    <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- SUBMIT BUTTON  --}}
                            <div class="row mb-0 ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Registrar Empresa') }}
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


