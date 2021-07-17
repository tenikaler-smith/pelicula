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
        <form action="#" method="post">
          <input type="hidden" name="csrftoken" value="ea49375f43c7e6a59c77df1e4de562b3f1350124eeb70e5d5124e4ce3b5251c2b4d12e9aaf2a3ddc618c178c8dc4620b">
          <div class="form-group mb-3">
            <label for="fname">Nombre</label>
            <input type="text" name="fname" placeholder="First Name" class="form-control" required="">
          </div>

          <div class="form-group mb-3">
            <label class="custom-checkbox"><input type="checkbox" checked="checked"><span class="checkmark"></span> Suscribete<p></p></label>
          </div>
          <div class="form-group mb-0 d-flex justify-content-between">
            <button class="btn btn-success" type="submit" name="submit" id="submit">Guardar</button>
            <p class="mute p2">Regresar a <a href="{{ Route('user.login') }}" class="theme-secondary-text">Log In →</a></p>
          </div>
          <script>
            $(document).ready(function() {
              $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                  $('#show_hide_password input').attr('type', 'password');
                  $('#show_hide_password i').addClass("fa-eye-slash");
                  $('#show_hide_password i').removeClass("fa-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                  $('#show_hide_password input').attr('type', 'text');
                  $('#show_hide_password i').removeClass("fa-eye-slash");
                  $('#show_hide_password i').addClass("fa-eye");
                }
              });
            });
          </script>
        </form>
      </div>
    </div>
    <br/>
  @endsection