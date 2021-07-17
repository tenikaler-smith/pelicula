@extends('plantilla.layout')

@section('titulo')
Taller 7 - Catalogos
@endsection

@section('contenido')

<div class="container mt-5 pt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-4">

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
                            <div class="text-center m-auto btn-"   >
                                <h4 class="text-uppercase text-center">Iniciar Sesión</h4>
                            </div>

                            <form action="{{ Route('user.loginPost') }}" method="post" class="row g-3 needs-validation" role="form">
                                @csrf
                                <div class="form-group mb-3">
                                <label for="txtUser" class="form-label">teléfono, usuario o correo electronico </label>
                                <input type="text" name="txtUser" placeholder="teléfono, usuario o correo electronico" class="form-control" id="txtUser" value="{{old('txtUser')}}" aria-describedby="inputGroupPrepend">

                                    <div id="alertSuccess">
                                        @if (session('danger1'))
                                        <div class="text-danger">{{ session('danger1') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                <label for="password">Contraseña</label>
                                <div class="input-group bg-light has-validation">
                                    <input type="password" class="form-control" id="txtPassword" value="" name="txtPassword"
                                    placeholder="contraseña" aria-describedby="inputGroupPrepend">
                                    <div class="input-group-addon">
                                        <a href=""><i class="fa fa-lg fa-eye" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;"
                                        aria-hidden="true"></i></a>
                                    </div>

                                    <div id="alertSuccess">
                                        @if (session('danger2'))
                                        <div class="text-danger">{{ session('danger2') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                </div>
                                <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit" name="submit"> Iniciar Sesión </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
