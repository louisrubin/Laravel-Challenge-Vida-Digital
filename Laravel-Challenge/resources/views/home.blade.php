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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="fw-semibold fs-4 text">{{ __('Productos') }}</div>
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

                    @foreach ($allProductos as $item)
                        <div>
                            <a href="{{ route( 'mostrarProducto', [$item->cod_barra] ) }}" class="text-capitalize text-decoration-none">{{ $item->nombre_prod }}</a>
                        </div>
                        <hr>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
