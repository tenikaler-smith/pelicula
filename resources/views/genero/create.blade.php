@extends('plantilla.layout')

@section('titulo') Crear Genero @endsection

@section('contenido')

<div class="col-sm-4"></div>

<section class="container mt-5 pt-5 mb-5">
    <article class="col">

        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div id="alertDanger">
                        @if (session('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="#myAlert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>{{ session('danger') }}</strong>
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

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="text-center m-auto">
                                <h4 class="text-uppercase text-center">Crear Genero</h4>
                            </div>

                            <form action="{{ Route('genero.store') }}" method="post" role="form">
                                @csrf

                                <div class="form-group row">
                                    <label for="txtDescripcion" class="col-sm-3 text-end control-label col-form-label">Descripción</label>
                                    <div class="row col-sm-9">
                                        <input type="text" name="txtDescripcion" value="{{old('txtDescripcion')}}" id="txtDescripcion"
                                            class="form-control" placeholder="Descripción">
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-warning btn-block" type="submit" name="submit"> Guardar <i class="fas fa-save" aria-hidden="true"></i> </button>
                                            |
                                            <button type="reset" name="reset" class="btn btn-dark btn-block"> Cancelar </button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>


                </div>

            </div>
        </div>
    </article>
</section>


<div class="col-sm-4"></div>
@endsection
