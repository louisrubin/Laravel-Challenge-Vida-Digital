@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Modificar Sucursal
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Modificar Sucursal '{{ $sucursal->nombre_sucur }}'
@endsection


@section('content')
    
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sucursal') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('updateSucursal', ['id' => $sucursal->ID_sucursal]) }}" >
                            @method('PATCH')
                            @csrf


                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Nombre de la Sucursal') }}</label>

                                <div class="col-md-6">
                                    <input name="nombre_sucur"  type="text" class="form-control" value="{{ $sucursal->nombre_sucur }}" autofocus @if ($sucursal->ID_sucursal == 1 or $sucursal->ID_sucursal == 2) @disabled(true) @endif>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Dirección Comercial') }}</label>

                                <div class="col-md-6">
                                    <input name="direc_comerc" type="text"  class="form-control" value="{{ $sucursal->direc_comerc }}" @if ($sucursal->ID_sucursal == 1 or $sucursal->ID_sucursal == 2) @disabled(true) @endif >

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>
                                
                                <div class="col-md-6">
                                    <input name="telefono" type="text" class="form-control" value="{{ $sucursal->telefono }}" @if ($sucursal->ID_sucursal == 1 or $sucursal->ID_sucursal == 2) @disabled(true) @endif>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <input name="email" type="text" class="form-control" value="{{ $sucursal->email }}" @if ($sucursal->ID_sucursal == 1 or $sucursal->ID_sucursal == 2) @disabled(true) @endif>

                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Empresa Perteneciente') }}</label>

                                <div class="col-md-6">
                                    <select name="ID_empresa1" class="form-control" >

                                        <option value="" class="@error('ID_empresa1') is-invalid @enderror" >Seleccionar</option>
                                        
                                        @foreach ($allEmpresas as $item)
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


                            <div class="row mb-0 ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success" @if ($sucursal->ID_sucursal == 1 or $sucursal->ID_sucursal == 2) @disabled(true) @endif>
                                        {{ __('Actualizar Sucursal') }}
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