@extends('plantilla.layout')

@section('titulo') Generos @endsection

@section('contenido')

<p></p>
<h3 class="text-center text-white">Generos de Peliculas</h3>
<p></p>
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Generos</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-bordered table-hover display">
                        <thead>
                            <tr class="text-bold">
                                <th>Id Genero</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $resultados as $genero )
                                <tr>
                                    <td scope="row">{{ $genero->id }}</td>
                                    <td>{{ $genero->descripcion }}</td>
                                    <td>
                                        <a name="" id="" class="btn btn-warning" href="{{ Route('genero.edit', [ 'id'=>$genero->id ] ) }}">Editar <i
                                        class="fas fa-edit" aria-hidden="true"></i></a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger text-center" data-bs-toggle="modal"
                                            data-bs-target="#modelDelete{{ $genero->id }}">Eliminar <i class="fas fa-trash-alt"></i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modelDelete{{ $genero->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Eliminar</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            Esta seguro que desea eliminar la pelicula <strong>{{$genero->descripcion}}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <a href="{{ route('genero.destroy', ['id'=>$genero->id]) }}"><button type="button"
                                                                class="btn btn-primary">Si</button></a>
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
