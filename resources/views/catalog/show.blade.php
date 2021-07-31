@extends('plantilla.layout')

@section('titulo') Catálogo Mostrar @endsection

@section('contenido')
    <h4 class="text-center">Detalle de Pelicula</h4>

    @foreach($resultados as $catalogo)

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('catalog.index') }}">Catalogo</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $catalogo->titulo }}</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{$catalogo->imagen}}" alt="{{ $catalogo->titulo }}">
                </div>
            </div>
            <div class="col-sm-9">
                <table class="table bg-light">
                    <tbody>
                        <tr>
                            <td><strong>Titulo</strong></td>
                            <td>{{ $catalogo->titulo}}</td>
                        </tr>
                        <tr>
                            <td><strong>Descripción</strong></td>
                            <td>{{ $catalogo->descripcion}}</td>
                        </tr>
                        <tr>
                            <td><strong>Genero</strong></td>
                            <td>{{ $catalogo->generos}}</td>
                        </tr>
                        <tr>
                            <td><strong>Precio</strong></td>
                            <td>{{ $catalogo->precio}}</td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td>
                                <form action="{{route('carrito.store')}}" method="post">
                                    @csrf

                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen1">
                                        Ver Trailer  <i class="fas fa-film"></i>
                                    </button>

                                    <div class="modal fade" id="exampleModalFullscreen1" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel"
                                        aria-modal="true" role="dialog">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content bg-dark">
                                                <div class="modal-header">
                                                    <button type="button" class="btn btn-close btn-light text-white bg-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                                </div>
                                                <div class="modal-body bg-dark">
                                                    <iframe width="100%" height="100%" src="{{$catalogo->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @if(session("rol")=="user")
                                        <input type="hidden" name="id_pelicula" value="{{$catalogo->id}}">
                                        <input type="hidden" name="titulo" value="{{$catalogo->titulo}}">
                                        <input type="hidden" name="precio" value="{{$catalogo->precio}}">
                                        <input type="hidden" name="imagen" value="{{$catalogo->imagen}}">
                                        <button type="submit" name="" id="" class="btn btn-danger">Agregar al Carrito <i class="fas fa-cart-plus"></i></button>
                                    @endif
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    @endforeach






@endsection
