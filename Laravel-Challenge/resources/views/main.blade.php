@extends('index')

@section('contenido')
    <div class="container w-50 p-3 border-4 mt-4" style="background-color: rgba(109, 148, 202, 0.568)">
        
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
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                
                <tbody>
                    
                    @foreach ($productos as $key => $item)
                        <tr class="align-middle">
                            <th scope="row">
                                {{ $key+1 }}
                            </th>

                            <td>{{ $item->nombre_prod }}</td>
                            <td>{{ $item->unid_x_bulto }}</td>
                            <td>{{ $item->precio_vent_bulto }}</td>

                            <td>
                                <button type="button" class="btn btn-dark btn-sm">Modificar</button>
                                <form action="{{ route('productos-destroy', [$item->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>

                        </tr>
                        
                    @endforeach
                </tbody>

              </table>


        </div>

    </div>


    
@endsection