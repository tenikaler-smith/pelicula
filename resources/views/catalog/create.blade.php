@extends('plantilla.layout')

@section('titulo') Crear Pelicula @endsection

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

                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="text-center m-auto">
                                <h4 class="text-uppercase text-center">Crear Catálogo</h4>
                            </div>

                            <form action="{{ Route('catalog.store') }}" method="post" role="form">
                                @csrf
                                <div class="form-group row">
                                    <label for="txtTitle" class="col-sm-3 text-end control-label col-form-label">Título de la Pelicula</label>
                                    <div class="row col-sm-9">
                                        <input type="text" name="txtTitle" value="{{old('txtTitle')}}" id="txtTitle"
                                            class="form-control" placeholder="Título">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="selGenero" class="col-sm-3 text-end control-label col-form-label">Género</label>
                                    <div class="row col-sm-9">
                                        <select name="selGenero" class=" col-sm-6 form-select dropdown form-control" aria-label="genero">
                                            @foreach ($generos as $genero)
                                            <option class="dropdown-item" value="{{$genero->id}}{{old('selGenero')}}">{{$genero->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="txtDescripcion" class="col-sm-3 text-end control-label col-form-label">Descripcion</label>
                                    <div class="row col-sm-9">
                                        <input type="text" name="txtDescripcion" value="{{old('txtDescripcion')}}" id="txtDescripcion"
                                            class="form-control" placeholder="Descripción">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="numPrecio" class="col-sm-3 text-end control-label col-form-label">Precio</label>
                                    <div class="row col-sm-9">
                                        <input type="text" name="numPrecio" value="{{old('numPrecio')}}" id="numPrecio"
                                            class="form-control" placeholder="Precio">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="txtImagen" class="col-sm-3 text-end control-label col-form-label">Imagen</label>
                                    <div class="row col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Imagen" name ="txtImagen" value ="{{old('txtImage')}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="txtVideo" class="col-sm-3 text-end control-label col-form-label">Video</label>
                                    <div class="row col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="link del video" name ="txtVideo" value="{{old('txtImage')}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="txtVideo" class="col-sm-3 text-end control-label col-form-label">Trailer</label>
                                    <div class="row col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder="Trailer" name ="txtTrailer" value ="{{old('txtVideo')}}">
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-warning btn-block" type="submit" name="submit"> Guardar </button>
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
