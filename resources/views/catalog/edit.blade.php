  @extends('plantilla.layout')

  @section('titulo')
      Taller 7 - Crear Pelicula
  @endsection

  @section('contenido')
    <div class="container">
      <br/>
      <div class="card justify-content-center">
        <div class="card-body">
          <div class="text-center m-auto">
            <h4 class="text-uppercase text-center">Editar Catálogo</h4>
          </div>
          <form action="#" method="post">
            <div class="form-group mb-3">
              <label for="fname">Pelicula {{ $id }}</label>
              <input type="text" name="fname" id="edit" value="Pelicula {{$id}}" placeholder="" class="form-control" required="">
            </div>

            <div class="form-group mb-0 d-flex justify-content-between">
              <button class="btn btn-success" type="submit" name="submit" id="submit">Guardar</button>
            </div>
            <a class="btn btn-primary" href="{{Route('catalog.index')}}"><- Regresar</a>
          </form>
        </div>
      </div>
      <br/>
    </div>

  @endsection
