@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Home
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Bienvenido
@endsection

@section('content')
<div class="container d-flex justify-content-around">
    <div class="row justify-content-center w-75">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="fw-semibold fs-4 text">{{ __('Productos') }}</div>
                    <a href="{{ route('createProductoPage') }}" type="button">
                        <button type="button" class="btn btn-primary p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg>
                            Agregar
                        </button>
                    </a>
                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- FOR EACH PRODUCTO --}}
                    @foreach ($allProductos as $key => $item)
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="{{ route( 'mostrarProducto', [$item->cod_barra] ) }}" class="text-capitalize text-decoration-none fw-bold">
                                    {{ $item->nombre_prod }}
                                </a>
                                <small class="ps-2">({{ $item->unid_x_bulto }} x ${{ $item->precio_vent_bulto }})</small>
                            </div>
                            

                            {{-- DELETE PRODUCTO --}}
                            <form method="POST" action="{{ route('eliminarProducto', [$item->cod_barra])  }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                                    </svg>
                                </button>

                            </form>
                            
                        </div>
                        <hr>

                    {{-- ONLY SHOW FIRST 3 ELEMENTS --}}
                        @if ($key == 2)
                            @break
                        @endif

                    @endforeach
                    

                    <div class="text-center">
                        <a href="{{ route('viewAllProducts') }}" class="text-decoration-none fw-bold pt-3 ">Ver todos los productos ({{ count($allProductos) }})</a>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>





{{-- ----   EMPRESAS   ---- --}}



    <div class="row justify-content-center w-75">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="fw-semibold fs-4 text">{{ __('Empresas') }}</div>
                    <a href="{{ route('viewAllProducts') }}" type="button">
                        <button type="button" class="btn btn-primary p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg>
                            Agregar
                        </button>
                    </a>
                </div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- FOR EACH EMPRESA --}}
                    @foreach ($allEmpresas as $empresa)
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="" class="text-capitalize text-decoration-none fw-bold">
                                    {{ $item->nombre }}
                                </a>
                                {{-- <small class="ps-2">({{ $item->unid_x_bulto }} x ${{ $item->precio_vent_bulto }})</small> --}}
                            </div>
                            

                            {{-- DELETE EMPRESA --}}
                            {{-- <form method="POST" action="{{ route('eliminarProducto', [$item->ID_empresa])  }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                                    </svg>
                                </button>

                            </form> --}}
                            
                        </div>
                        <hr>
                    @endforeach
                    
                    @if (count($allEmpresas) >= 3)
                        <div class="text-center">
                            <a href="" class="text-decoration-none fw-bold pt-3 ">Ver todas las empresas ({{ count($allEmpresas) }})</a>
                        </div>
                        
                    @endif
                    
                </div>
            </div>
        </div>
    </div>



</div>

@endsection
