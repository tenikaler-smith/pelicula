    @extends('plantilla.layout')

    @section('titulo')
        Taller 7 - Crear Pelicula
    @endsection

    @section('contenido')
      <br>

    <div class="card">
      <div class="card-body">
        <div class="text-center m-auto">
          <h4 class="text-uppercase text-center">Crear Catálogo</h4>
        </div>



<section class="row">
            <article class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-auto">
                            <h4 class="text-uppercase text-center">Crear Catálogo</h4>
                        </div>
                        <div id="alertDanger">
                            @if (session('danger'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="#myAlert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session('danger') }}</strong>
                            </div>
                            @endif
                        </div>

                        <form action="{{ Route('catalog.create_registrar') }}" method="post" role="form">
                            @csrf

                            <div class="row mb-3">
                                <label for="txtTitle" class="col-sm-2 form-label">Título de la Pelicula</label>
                                <div class="row col-sm-6">
                                    <input type="txtTitle" name="txtTitle" value="{{old('txtTitle')}}" id="txtTitle"
                                        class="form-control" placeholder="Título">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="txtTitle" class="col-sm-2 form-label">Género</label>
                                <div class="row col-sm-6">
                                    <select name="selGenero" class=" col-sm-6 form-select dropdown form-control"
                                        aria-label="genero">
                                        @foreach ($generos as $clave=>$value)
                                        <option class="dropdown-item" value="{{$clave}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="txtResumen" class="col-sm-2 form-label">Resumen</label>
                                <div class="row col-sm-6">
                                    <input type="txtResumen" name="txtResumen" value="{{old('txtResumen')}}" id="txtResumen"
                                        class="form-control" placeholder="Resumen">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="numPrecio" class="col-sm-2 form-label">Precio</label>
                                <div class="row col-sm-6">
                                    <input type="numPrecio" name="numPrecio" value="{{old('numPrecio')}}" id="numPrecio"
                                        class="form-control" placeholder="Precio">
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">procesar</button>|<button type="reset"
                                    class="btn btn-warning">Borrar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </article>
        </section>
        <br>
        <hr>
        <br>
        <section>
            <article class="col" id="CardCalcularPrecio4">
                @if (session('success'))
                <div>
                    <div class="card border-success mb-3 w-50">
                        <div class="card-header bg-transparent border-success">
                            <h5 class="card-title">El resultado de la operación</h5>
                        </div>
                        <div class="card-body text-success">
                            <p class="card-text"><strong>Datos Guardados</strong></p>
                            <p class="card-text"><strong>{{ session('success') }}</strong></p>
                        </div>
                        <div class="footer">
                            <button id="problema9" class="btn btn-warning">Limpiar</button>
                        </div>
                    </div>
                </div>
                @endif
            </article>
        </section>



      </div>
    </div>
    <br/>
  @endsection
