@extends('plantilla.layout')

@section('titulo')
Taller 7 - Catalogos
@endsection

@section('contenido')
<br>
<h3 class="text-center text-white">Catálogo de Peliculas</h3>
<p class="text-center text-white">Ultimos Estrenos</p>

<div class="row">
    @for ($i = 1; $i <= 8; $i++) <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-3">
        <div class="card">
            <img class="card-img-top" src="{{asset("assets/back/img/catalog/$i.jpg")}}" alt="">
            <div class="card-body">
                <h4 class="card-title text-center">Pelicula {{ $i }}</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Animi saepe, ea ratione quos iusto aspernatur quam rem distinctio quisquam possimus non molestiae
                    est libero harum ab assumenda! Corrupti,
                    qui assumenda!
                </p>
                <strong>Precio: $10.20</strong>

                <p>Genero: Accion</p>
                <a name="" id="" class="btn btn-dark text-center" href="{{ Route('catalog.show', [ 'id'=>$i ] ) }}">Ver
                    Detalles</a>
                <a name="" id="" class="btn btn-warning text-center"
                    href="{{ Route('catalog.edit', [ 'id'=>$i ] ) }}">Editar</a>
            </div>
        </div>
        <br>
</div>
@endfor
</div>
<br>

@endsection