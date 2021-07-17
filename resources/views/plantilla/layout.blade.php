<!doctype html>
<html lang="en">
  <head>

    @include("plantilla.head")

  </head>
  <body class="bg-dark">
    <div class="container">

      @include("plantilla.header")

      @yield("contenido")

      @include("plantilla.footer")

    </div>

    @include('plantilla.script')

  </body>
</html>