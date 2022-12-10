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
                    <th scope="col">#</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Unidades por Bulto</th>
                    <th scope="col">Precio Venta por Bulto</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                <tbody>
                    
                    @foreach ($productos as $position => $item)
                        <tr class="align-middle">
                            <th scope="row">
                                {{ $position+1 }}
                            </th>

                            <td>{{ $item->nombre_prod }}</td>
                            <td>{{ $item->unid_x_bulto }}</td>
                            <td>$ {{ $item->precio_vent_bulto }}</td>

                            <td>
                                <td>
                                    <a href="{{ route('mostrarProducto', [$item->id] ) }}" type="button" class="btn btn-dark btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
                                            <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
                                        </svg>
                                    </a>
                                </td>

                                <td>
                                    <form action="{{ route('eliminarProducto', [$item->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>

              </table>


        </div>

    </div>


    
@endsection