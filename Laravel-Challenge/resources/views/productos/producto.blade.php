@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Ver Producto
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Producto "{{ $producto->nombre_prod }}"
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
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Precio en Venta por Bultos') }}</label>

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

                        <a href="{{ route('home') }}" >
                            <button class="btn btn-dark btn-sm mt-3 ">Volver</button>
                        </a>

                    </div>
            </div>
        </div>
    </div>
</div>


{{-- 
    <div class="container w-50 p-3 border-4 mt-4" style="background-color: rgba(109, 148, 202, 0.568)">
        
        <form action="{{ route('updateProducto', ['codigo' => $producto->cod_barra]) }}" method="POST" >
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Código de Barra</label>
                <input type="text" name="cod_barra" class="form-control" value="{{ $producto->cod_barra }}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Nombre del Producto</label>
                <input type="text" name="nombre_prod" class="form-control" value="{{ $producto->nombre_prod }}">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Unidades por Bulto</label>
                <input type="text" name="unid_x_bulto" class="form-control" value="{{ $producto->unid_x_bulto }}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Precio en Venta por Bulto</label>
                <div class="input-group mb-3">
                    <span class="input-group-text fw-semibold">$</span>
                    <input type="text" name="precio_vent_bulto" class="form-control" value="{{ $producto->precio_vent_bulto }}">
                </div>
            </div>
            
            <button type="submit" class="btn btn-success btn-lg col-md-2 me-3" >Modificar</button>
        </form>

        <a href="{{ route('home') }}">
            <button class="btn btn-dark btn-m mt-3 ">Volver</button>
        </a>
    
    </div> --}}


    
@endsection