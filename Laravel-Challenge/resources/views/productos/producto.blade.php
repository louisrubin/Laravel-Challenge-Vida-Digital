@extends('index')

@section('contenido')
    <div class="container w-50 p-3 border-4 mt-4" style="background-color: rgba(109, 148, 202, 0.568)">
        
        <form action="{{ route('updateProducto', ['id' => $producto->id]) }}" method="POST" >
            @method('PATCH')
            @csrf
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
            
            <button type="submit" class="btn btn-dark btn-lg col-md-3 mx-auto" >Modificar</button>

        </form>
    
    </div>


    
@endsection