@extends('plantilla.layout')

@section('titulo')
Taller 7 - Catalogos
@endsection

@section('contenido')

<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->
<div class="box">
    <div class="error-body text-center">
        <h1 class="text-warning">Esta página no está disponible</h1>
        <h3 class="text-uppercase error-subtitle">Acesso denegado !</h3>
        <a href="{{ route('index') }}" class="btn btn-warning btn-rounded waves-effect waves-light mb-5 text-white">Regresar a Inicio</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->


@endsection