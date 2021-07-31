@extends('plantilla.layout')

@section('titulo') Listado de Peliculas en Carrito @endsection

@section('contenido')


<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3><b>FACTURA</b> <span class="pull-right">#</span></h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    {{-- <div class="pull-left">
                        <address>
                            <h3> &nbsp;<b class="text-danger">Material Pro Admin</b></h3>
                            <p class="text-muted ms-1">E 104, Dharti-2,
                                <br /> Nr' Viswakarma Temple,
                                <br /> Talaja Road,
                                <br /> Bhavnagar - 364002</p>
                        </address>
                    </div>
                    <div class="pull-right text-end">
                        <address>
                            <h3>To,</h3>
                            <h4 class="font-bold">Gaala & Sons,</h4>
                            <p class="text-muted ms-4">E 104, Dharti-2,
                                <br /> Nr' Viswakarma Temple,
                                <br /> Talaja Road,
                                <br /> Bhavnagar - 364002</p>
                            <p class="mt-4"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd
                                Jan 2018</p>
                            <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2018</p>
                        </address>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="table-responsive mt-5" style="clear: both;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Portada</th>
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $carrito as $datos )
                                    <tr>
                                        <td class="text-center" scope="row">{{ $datos["numero"] }}</td>
                                        <td class="text-center"><img src="{{ $datos["imagen"] }}" class="img-fluid rounded-top rounded-right rounded-bottom rounded-left"
                                                alt="{{ $datos["titulo"] }}" width="50px"></td>
                                        <td class="text-center">{{ $datos["titulo"] }}</td>
                                        <td class="text-center">{{ $datos["precio"] }}</td>
                                        <td class="text-center">
                                            <a name="" id="" class="btn btn-danger" href="{{ Route('carrito.destroy', [ 'id'=>$datos['numero'] ] ) }}"
                                                role="button">Quitar <i class="fas fa-trash-alt" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Portada</th>
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pull-right mt-4 text-end">
                        {{-- <p>Sub - Total amount: $13,848</p>
                        <p>vat (10%) : $138 </p> --}}
                        <hr>
                        <h3><b>Total :</b> {{ number_format(session("total"), 2)}}</h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="text-end">

                        <button type="button" class="btn btn-danger btn-lg text-white" data-bs-toggle="modal" data-bs-target="#staticBackdropPago">
                            procesar con la compra <i class="fab fa-cc-paypal"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdropPago" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Resumen de Compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Total de Peliculas: {{session("numeroMuestra")}}<br>
                                        Monto a Pagar: {{session("total")}}
                                        <br><br><br><br>

                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                                            <input type="hidden" name="cmd" value="_xclick">
                                            <input type="hidden" name="business" value="sb-jqosv6906824@business.example.com">
                                            <input type="hidden" name="item_name" value="Peliculas:  {{$descripcion}}">
                                            <input type="hidden" name="item_number" value="{{$codigo}}">
                                            <input type="hidden" name="amount" value="{{session('total')}}">
                                            <input type="hidden" name="tax" value="0">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="currency_code" value="USD">


                                            <input type="hidden" name="country" value="PA">
                                            <input type="hidden" name="return" value="http://127.0.0.1:8000/procesar/{{$codigo}}">
                                            <input type="submit" name="submit" value="Pagar con Paypal" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
