@extends('plantilla.layout')

@section('title') Pelicula
@endsection

@section('contenido')

<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>


  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset("assets/back/img/xmen.jpg")}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Las mejores peliculas las encontrarás aqui</h3>
        <p>No te las pierdas</p>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset("assets/back/img/fast and furios.png")}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Escribenos para más información</h3>
        <button type="button" class="btn btn-primary">Contactenos</button>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset("assets/back/img/aladin.jpg")}}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Las mejores peliculas las encontrarás aqui</h5>
        <p>No te las pierdas</p>
      </div>
    </div>
  </div>



  <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>


<h3 class="text-white text-center">Catálogo de Peliculas</h3>
<p class="text-white text-center">Ultimos Estrenos</p>

<div class="row">
    @foreach ( $resultados as $resultado )

        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
            <div class="card">
                <img class="card-img-top" src="{{$resultado->imagen}}" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ $resultado->titulo }}</h4>
                    <p><a class="btn btn-dark" href="{{ Route('catalog.show', [ $resultado->id ] ) }}">Ver Detalles <i class="fas fa-eye"></i> </a></p>

                    <p class="card-text">Precio:<strong>{{ $resultado->precio }}</strong></p>
                    <p class="card-text">Genero: <strong>{{ $resultado->generos }}</strong></p>


                    @if (session("rol")=="admin")
                    <a href="{{route("catalog.edit", ['id'=>$resultado->id ] )}}" class="btn btn-warning">Editar <i class="fas fa-edit" aria-hidden="true"></i> </a>
                    <button type="button" class="btn btn-danger text-center" data-bs-toggle="modal"
                        data-bs-target="#modelId{{ $resultado->id }}">Eliminar <i class="fas fa-trash-alt"></i></button>
                    <!-- Button trigger modal -->




                    <!-- Modal -->
                    <div class="modal fade" id="modelId{{ $resultado->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Eliminar {{ $resultado->titulo }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        Esta seguro que desea eliminar la pelicula <strong>{{$resultado->titulo}}</strong>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <a href="{{ route('catalog.destroy', ['id'=>$resultado->id]) }}"><button type="button"
                                            class="btn btn-primary">Si</button></a>
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

@endsection
