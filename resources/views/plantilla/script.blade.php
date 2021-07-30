<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->

<script src="{{asset("assets/back/dist/libs/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset("assets/back/dist/js/bootstrap.bundle.js")}}"></script>


<script src="{{asset("assets/extra-libs/sparkline/sparkline.js")}}"></script>
<!--Wave Effects -->
<script src="{{asset("dist/js/waves.js")}}"></script>
<!--Menu sidebar -->
<script src="{{asset("dist/js/custom.min.js")}}"></script>
<!-- this page js -->
<script src="{{asset("assets/back/dist/libs/magnific-popup/dist/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("assets/back/dist/libs/magnific-popup/meg.init.js")}}"></script>

<script src="{{asset("assets/extra-libs/multicheck/datatable-checkbox-init.js")}}"></script>
<script src="{{asset("assets/extra-libs/multicheck/jquery.multicheck.js")}}"></script>
<script src="{{asset("assets/extra-libs/DataTables/datatables.min.js")}}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/

    $(document).ready(function() {
        $('#zero_config').DataTable( {
        "language": {
        "lengthMenu": "Desplegando _MENU_ Registros por pagina",
        "zeroRecords": "Lo sentimos, no se encontro",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros ",
        "infoFiltered": "(filtered from _MAX_ total de registros)"
        }
        } );
    } );

</script>




<script src="https://kit.fontawesome.com/dbefa9deda.js" crossorigin="anonymous"></script>
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $(".preloader").fadeOut();
// ==============================================================
// Login and Recover Password
// ==============================================================
$('#to-recover').on("click", function() {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
});
$('#to-login').click(function(){

    $("#recoverform").hide();
    $("#loginform").fadeIn();
});

$(".preloader").fadeOut();


</script>


{{-- <script>
$(".preloader").fadeOut();
</script> --}}
