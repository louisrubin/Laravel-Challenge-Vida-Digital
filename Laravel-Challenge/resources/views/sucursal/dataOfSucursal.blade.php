@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Sucursal
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    {{ $oneSucursal->nombre_sucur }}
    @if ($oneSucursal->ID_sucursal == 1 or $oneSucursal->ID_sucursal == 2)
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock-fill pb-1" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
        </svg>
    @endif
@endsection


@section('content')

<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="mb-3">

                <a href="{{ route('createSucursalPage') }}" type="button">
                    <button type="button" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                        </svg>
                        Registrar Sucursal
                    </button>
                </a>

                {{-- BACK TO MENU --}}
                <a href="{{ route('home') }}" >
                    <button class="btn btn-dark btn-m ms-3">Ir a Inicio</button>
                </a>
            </div>

            <div class="card">

                <table class="text-center mb-2">
                    <tr class="bg-dark text-white">
                        <th class="py-3">Nombre</th>
                        <th>Dirección Comercial</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Cant. Empleados</th>
                        <th>Acción</th>
                    </tr>

                        <tr class="fs-4">
                            <td>{{ $oneSucursal->nombre_sucur }}</td>
                            <td class="text-capitalize">{{ $oneSucursal->direc_comerc }}</td>
                            <td>{{ $oneSucursal->telefono }}</td>
                            <td>{{ $oneSucursal->email }}</td>
                            <td>{{ count($usersOfSucursal) }}</td>
                            <td>
                                <a href="{{ route('allDataOfSucursal', ['id' => $oneSucursal->ID_sucursal] ) }}" class="text-decoration-none me-1" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>

                                {{-- DELETE ITEM FORM --}}
                                <form method="POST" class="d-inline" action="{{ route('eliminarSucursal', [$oneSucursal->ID_sucursal] )  }}">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent"
                                            @if ($oneSucursal->ID_sucursal == 1 or $oneSucursal->ID_sucursal == 2) @disabled(true) @endif>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                        
                                </form>

                            </td>
                        </tr>
                </table>
            </div>



{{-- EMPLEADOS EN SUCURSAL --}}
                
<div class="card mt-5">
    <div class="card-header fs-5 fw-semibold">
        <div>Empleados de 
            <b class="fst-italic text-decoration-underline">{{ $oneSucursal->nombre_sucur }} </b>
        </div>
    </div>

    <div class="card-body">
        <table class="text-center mb-2 fs-5 col-md-12">
            <tr class="bg-dark text-white">
                <th class="py-3">Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Domicilio</th>
            </tr>
        
                @foreach ($usersOfSucursal as $user)
                    <tr class="fs-4">
                        <td class="text-capitalize">{{ $user->user_name }}</td>
                        <td class="text-capitalize">{{ $user->apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->domicilio }}</td>
                    </tr>
                @endforeach
        </table>
            
    </div>

</div>



@endsection