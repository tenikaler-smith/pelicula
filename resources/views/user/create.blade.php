@extends('plantilla.layout')

    @section('titulo')
        Crear Usuario
    @endsection

@section('contenido')
<section class="row">
<div class="col-sm-4"></div>
    <div class="container mt-5 pt-5 mb-5">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div id="alertSuccess">
                        @if (session('estado'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('estado') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>

                    <div id="alertSuccess">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="text-center m-auto">
                                <h4 class="text-uppercase text-center">Crear Usuario</h4>
                            </div>

                            <form class="form-horizontal" action="{{ Route('user.store') }}" method="POST" role="form">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="txtNombre" class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="txtNombre" class="form-control" id="txtNombre" value="{{session('nombre')}}"
                                                placeholder="Nombre">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="txtUser" class="col-sm-3 text-end control-label col-form-label">Usuario</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="txtUser" class="form-control" id="txtUser" value="{{session('usuario')}}"
                                                placeholder="Usuario">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="txtPassword"
                                            class="col-sm-3 text-end control-label col-form-label">Contraseña</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="txtPassword" placeholder="Contraseña" name="txtPassword">
                                            <div id="alertSuccess">
                                                @if (session('estado2'))
                                                <div class="text-danger">{{ session('estado2') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="txtPassword2"
                                            class="col-sm-3 text-end control-label col-form-label">Repetir Contraseña</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="txtPassword2" placeholder="Contraseña" name="txtPassword2">
                                            <div id="alertSuccess">
                                                @if (session('estado2'))
                                                <div class="text-danger">{{ session('estado2') }}
                                                </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label for="flImage" class="col-sm-3 text-end control-label col-form-label">Cargar Imagen</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile">
                                                <label class="custom-file-label" for="validatedCustomFile">cambiar imagen</label>
                                                <div class="invalid-feedback">fallo al Cargar la imagen</div>
                                            </div>
                                        </div>
                                    </div>
                                    --}}

                                    <div class="border-top">
                                        <div class="card-body">
                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-warning btn-block" type="submit" name="submit"> Guardar </button>
                                                |
                                                <button type="reset" name="reset" class="btn btn-dark btn-block"> Cancelar </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
