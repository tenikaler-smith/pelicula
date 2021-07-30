@extends('plantilla.layout')

@section('titulo') Listado de Peliculas en Carrito @endsection

@section('contenido')

<p></p>
<h1 class="text-center text-white">Productos en el carrito</h1>
<p></p>
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Factura</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-bordered table-hover display">
                        <thead>
                            <tr class="text-bold">
                                <th>Número</th>
                                <th>Portada</th>
                                <th>Titulo</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $carrito as $datos )
                                <tr>
                                    <td scope="row">{{ $datos["numero"] }}</td>
                                    <td><img src="{{ $datos["imagen"] }}" class="img-fluid rounded-top rounded-right rounded-bottom rounded-left" alt="{{ $datos["titulo"] }}" width="50px"></td>
                                    <td>{{ $datos["titulo"] }}</td>
                                    <td>{{ $datos["precio"] }}</td>
                                    <td>
                                        <a name="" id="" class="btn btn-danger" href="{{ Route('carrito.delete', [ 'id'=>$datos['numero'] ] ) }}" role="button">Quitar <i class="fas fa-edit" aria-hidden="true"></i></a>
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

                    <h4>Total: {{ number_format(session("total"), 2)}}</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropPago">
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
                                        <input type="hidden" name="return" value="procesar/{{$codigo}}">
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
<br>



<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
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
                </div>
                <div class="col-md-12">
                    <div class="table-responsive mt-5" style="clear: both;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-end">2 </td>
                                    <td class="text-end"> $24 </td>
                                    <td class="text-end"> $48 </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Air Conditioner</td>
                                    <td class="text-end"> 3 </td>
                                    <td class="text-end"> $500 </td>
                                    <td class="text-end"> $1500 </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>RC Cars</td>
                                    <td class="text-end"> 20 </td>
                                    <td class="text-end"> %600 </td>
                                    <td class="text-end"> $12000 </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Down Coat</td>
                                    <td class="text-end"> 60 </td>
                                    <td class="text-end">$5 </td>
                                    <td class="text-end"> $300 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pull-right mt-4 text-end">
                        <p>Sub - Total amount: $13,848</p>
                        <p>vat (10%) : $138 </p>
                        <hr>
                        <h3><b>Total :</b> $13,986</h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="text-end">
                        <button class="btn btn-danger text-white" type="submit"> Proceed to payment </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
