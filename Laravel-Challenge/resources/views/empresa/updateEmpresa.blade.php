@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Modificar Empresa
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Modificar Empresa '{{ $empresa->nombre_emp }}'
@endsection


@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Empresa') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('updateEmpresa', ['id' => $empresa->ID_empresa]) }}">
                                @method('PATCH')
                                @csrf


                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Nombre de la Empresa') }}</label>

                                    <div class="col-md-6">
                                        <input name="nombre_emp"  type="text" class="form-control" value="{{ $empresa->nombre_emp }}" required autofocus>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Dirección Comercial') }}</label>

                                    <div class="col-md-6">
                                        <input name="direc_comerc" type="text"  class="form-control" value="{{ $empresa->direc_comerc }}" required >

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input name="telefono" type="text" class="form-control" value="{{ $empresa->telefono }}" required>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    
                                    <div class="col-md-6">
                                        
                                        <input name="email" type="text" class="form-control" value="{{ $empresa->email }}" required>

                                    </div>
                                </div>

                                <div class="row mb-0 ">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Actualizar Empresa') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                            {{-- BACK TO MENU --}}
                            <a href="{{ route('home') }}" >
                                <button class="btn btn-dark btn-sm mt-3 ">Volver</button>
                            </a>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection


