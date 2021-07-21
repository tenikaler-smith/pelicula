@extends('plantilla.layout')

    @section('titulo')
        Crear Usuario
    @endsection

    @section('contenido')
      <br>

<section class="row">
    <div class="container mt-5 pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4">

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
                        <div class="text-center m-auto btn-">
                            <h4 class="text-uppercase text-center">Crear Usuario</h4>
                        </div>

                        <form action="{{ Route('user.store') }}" method="POST" class="row g-3" role="form">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="txtNombre" class="form-label"> Nombre </label>
                                <input type="text" name="txtNombre" placeholder="Nombre"
                                    class="form-control" id="txtNombre" value="{{old('txtNombre')}}"
                                    aria-describedby="inputGroupPrepend">
                            </div>

                            <div class="form-group mb-3">
                                <label for="txtUser" class="form-label"> Usuario </label>
                                <input type="text" name="txtUser" placeholder="Usuario"
                                    class="form-control" id="txtUser" value="{{old('txtUser')}}"
                                    aria-describedby="inputGroupPrepend">
                            </div>

                            <div class="form-group mb-3">
                                <label for="txtPassword"> Contraseña</label>
                                <div class="input-group bg-light">
                                    <input type="password" class="form-control" id="txtPassword" value="{{old("txtPassword")}}" name="txtPassword"
                                        placeholder="contraseña" aria-describedby="inputGroupPrepend">
                                </div>
                                <div id="alertSuccess">
                                  @if (session('estado2'))
                                  <div class="text-danger">{{ session('estado2') }}
                                  </div>
                                  @endif
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="txtPassword2"> Repetir Contraseña</label>
                                <div class="input-group bg-light">
                                    <input type="password" class="form-control" id="txtPassword2" value="{{old("txtPassword2")}}" name="txtPassword2"
                                        placeholder="Repetir Contraseña" aria-describedby="inputGroupPrepend2">
                                </div>
                                <div id="alertSuccess">
                                  @if (session('estado2'))
                                  <div class="text-danger">{{ session('estado2') }}
                                  </div>
                                  @endif
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-warning btn-block" type="submit" name="submit"> Registrar
                                </button> |
                                <button class="btn btn-dark btn-block" type="reset" name="reset"> Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection
