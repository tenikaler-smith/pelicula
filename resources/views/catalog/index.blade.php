@extends('plantilla.layout')

@section('titulo')
Taller 7 - Catalogos
@endsection

@section('contenido')

    <h3 class="text-center text-white">Catálogo de Peliculas</h3>
    <p class="text-center text-white">Ultimos Estrenos</p>

    <div class="row">
        @foreach ( $resultados as $catalogo )
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset("$catalogo->imagen")}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $catalogo->titulo }}</h4>
                        <p class="card-text"></p>
                        <strong>Precio: $ {{ $catalogo->precio }}</strong>

                        <p>Genero: {{ $catalogo->generos }}</p>

                        <a name="" id="" class="btn btn-dark text-center"
                            href="{{ Route('catalog.show', [ 'id'=>$catalogo->id ] ) }}">Ver Detalles</a>

                        @if (session('rol')== "admin" )
                            <a name="" id="" class="btn btn-warning text-center"
                                href="{{ Route('catalog.edit', [ 'id'=>$catalogo->id ] ) }}">Editar</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger text-center" data-bs-toggle="modal" data-bs-target="#modelId{{ $catalogo->id }}">Eliminar</button>
                            <!-- Button trigger modal -->




                            <!-- Modal -->
                            <div class="modal fade" id="modelId{{ $catalogo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Eliminar {{ $catalogo->titulo }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                Esta seguro que desea eliminar la pelicula <strong>{{$catalogo->titulo}}</strong>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                            <a href="{{ route('catalog.destroy', ['id'=>$catalogo->id]) }}"><button type="button" class="btn btn-primary">Si</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endif
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div>
    <br>

@endsection
