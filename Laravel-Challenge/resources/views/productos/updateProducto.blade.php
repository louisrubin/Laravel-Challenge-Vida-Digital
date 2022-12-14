@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Ver '{{ $producto->nombre_prod }}'
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    "{{ $producto->nombre_prod }}"
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Producto') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('updateProducto', ['codigo' => $producto->cod_barra]) }}">
                            @method('PATCH')
                            @csrf


                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Código Barra') }}</label>

                                <div class="col-md-6">
                                    <input @readonly(true) id="cod_barra" name="cod_barra"  type="text" class="form-control @error('cod_barra') is-invalid @enderror" value="{{ $producto->cod_barra }}">

                                    @error('cod_barra')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Nombre del Producto') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre_prod" name="nombre_prod"  type="text" class="form-control @error('nombre_prod') is-invalid @enderror"value="{{ $producto->nombre_prod }}" required autofocus>

                                    @error('nombre_prod')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Unidades por Bultos') }}</label>

                                <div class="col-md-6">
                                    <input id="unid_x_bulto" name="unid_x_bulto" type="text"  class="form-control @error('unid_x_bulto') is-invalid @enderror" value="{{ $producto->unid_x_bulto }}" required >

                                    @error('unid_x_bulto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Precio en Venta por Bultos') }} 
                                    <span class="fw-bold ms-2">$</span>
                                </label>
                                
                                <div class="col-md-6">
                                    
                                    <input id="precio_vent_bulto" name="precio_vent_bulto" type="text" class="form-control @error('precio_vent_bulto') is-invalid @enderror" value="{{ $producto->precio_vent_bulto }}" required>

                                    @error('precio_vent_bulto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0 ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Actualizar Producto') }}
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