  @extends('plantilla.layout')

  @section('titulo')
      Taller 7 - Catálogo Mostrar
  @endsection

  @section('contenido')
    <div class="container">
      <br>
      <div class="container mt-5 pt-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="card">
              <img class="card-img-top" src="/img/catalog/{{$id}}.jpg" alt="" width="100" height="400">
              <div class="card-body">
                <h4 clas="card-title">Pelicula {{ $id }}</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  <br/>
                  Animi saepe, ea ratione quos iusto aspernatur quam rem distinctio quisquam possimus non molestiae est libero harum ab assumenda! Corrupti,
                  qui assumenda!
                </p>
                <strong> Precio: $10.20</strong>

                <p>Genero: Accion</p>
                <div class="form-group mb-0 d-flex justify-content-between">
                  <a class="btn btn-primary" href="{{Route('catalog.index')}}"><- Regresar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
  @endsection