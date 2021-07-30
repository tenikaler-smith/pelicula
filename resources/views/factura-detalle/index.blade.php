@extends('plantilla.layout')

@section('titulo') Ver Peliculas @endsection

@section('contenido')

<p></p>
<h3 class="text-center text-white">Peliculas Compradas</h3>
<p></p>
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Peliculas</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-bordered table-hover display">
                        <thead>
                            <tr class="text-bold">
                                <th>Id</th>
                                <th>Pelicula</th>
                                <th>Titulo</th>
                                <th>ver</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $resultados as $peliculas )
                                <tr>
                                    <td scope="row">{{ $peliculas->id }}</td>
                                    <td><img src="{{$peliculas->imagen}}" alt="{{ $peliculas->titulo }}" width="50px" ></td>
                                    <td>{{ $peliculas->titulo }}</td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen{{ $peliculas->id }}">
                                            Ver Pelicula <i class="fas fa-film"></i>
                                        </button>

                                        <div class="modal fade" id="exampleModalFullscreen{{ $peliculas->id }}" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe width="100%" height="100%" src="{{$peliculas->trailer}}" title="YouTube video player"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id Genero</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
<br>

@endsection
