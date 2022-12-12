@extends('index')

@section('contenido')
    <div class="container w-50 p-3 border-4 mt-4" style="background-color: rgba(109, 148, 202, 0.568)">
        
        @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
        @endif

        @error('nombre_prod')
            <h5 class="alert alert-danger">{{ $message }}</h5>
        @enderror

        <form action="{{ route('agregarProducto') }}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Código de Barra</label>
                <input type="text" name="cod_barra" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Nombre del Producto</label>
                <input type="text" name="nombre_prod" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Unidades por Bulto</label>
                <input type="text" name="unid_x_bulto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Precio en Venta por Bulto</label>
                <div class="input-group mb-3">
                    <span class="input-group-text fw-semibold">$</span>
                    <input type="text" name="precio_vent_bulto" class="form-control">
                </div>
            </div>
            
            <button type="submit" class="btn btn-dark btn-lg col-md-3 mx-auto">Agregar</button>

        </form>
    
        
        <div>

            <table class="table text-center">

                <thead>
                  <tr class="align-middle">
                    <th scope="col">Cód</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Unidades por Bulto</th>
                    <th scope="col">Precio Venta por Bulto</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                <tbody>
                    
                    @foreach ($productos as $item)

                        <tr class="align-middle">

                            <td>{{ $item->cod_barra }}</td>
                            <td>{{ $item->nombre_prod }}</td>
                            <td>{{ $item->unid_x_bulto }}</td>
                            <td>$ {{ $item->precio_vent_bulto }}</td>

                            <td>
                                
                                <a href="{{ route('eliminarProducto', [$item->cod_barra] ) }}"
                                    onclick="event.preventDefault();
                                    
                                    /* document.getElementById(
                                       // 'delete-form-{{ $item->cod_barra }} )'.submit();"
                                        
                                        >

                                    

                                </a>

                                <form id="delete-form-{{ $item->cod_barra }}"
                                    action="{{ route('eliminarProducto', [$item->cod_barra] ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf 

                                    <button class="btn btn-danger btn-sm p-1" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </button>
                                </form>
                                
                                
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>

              </table>


        </div>

    </div>


    
@endsection