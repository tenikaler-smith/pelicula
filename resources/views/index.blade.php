@extends('plantilla.layout')

@section('title')
Taller 7 - Pelicula
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
  @for ($i = 1; $i <= 4; $i++) <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
    <div class="card">
      <img class="card-img-top" src="{{asset("assets/back/img/catalog/$i.jpg")}}" alt="">
      <div class="card-body">
        <h4 class="card-title text-center">Pelicula {{ $i }}</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi saepe, ea ratione quos iusto aspernatur quam rem distinctio quisquam possimus non molestiae est libero harum abassumenda! Corrupti, qui assumenda!</p>
        <a name="" id="" class="btn btn-warning text-center" href="{{ Route('catalog.show', [ 'id'=>$i ] ) }}">Ver Detalles</a>
      </div>
    </div>
    <br>
</div>
@endfor
</div>

@endsection
