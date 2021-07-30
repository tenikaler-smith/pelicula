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
                                <th>Número</th>
                                <th>Total</th>
                                <th>Validación</th>
                                <th>Fecha de Creación</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $facturas as $factura )
                                <tr>
                                    <td scope="row">{{ $factura->id }}</td>
                                    <td>{{ $factura->md5validacion }}</td>
                                    <td>{{ $factura->created_at }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Número</th>
                                <th>Total</th>
                                <th>Validación</th>
                                <th>Fecha de Creación</th>
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
