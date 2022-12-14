@extends('layouts.app')

{{-- TITLE --}}
@section('title')
    Registrarse
@endsection

{{-- FRASE PRINCIPAL SUPERIOR --}}
@section('h1')
    Crear Usuario
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="user_name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" name="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" required autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" name="apellido"  type="text" class="form-control @error('apellido') is-invalid @enderror" required>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="domicilio" name="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror"  required>

                                @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" name="password_confirmation"  type="password" class="form-control" required>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="ID_sucursal1" class="col-md-4 col-form-label text-md-end">{{ __('Sucursal Perteneciente') }}</label>

                            <div class="col-md-6">
                                <select name="ID_sucursal1" class="form-control" >

                                    <option value="" class="@error('ID_sucursal1') is-invalid @enderror" >Seleccionar</option>
                                    
                                    @foreach ($sucursals as $item)
                                        <option value="{{ $item->ID_sucursal }}">{{ $item->nombre_sucur }}</option>
                                    @endforeach
                                    
                                    @error('ID_sucursal1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </select>


                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
