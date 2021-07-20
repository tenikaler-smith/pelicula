<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->

<script src="{{asset("assets/back/dist/libs/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset("assets/back/dist/js/bootstrap.bundle.js")}}"></script>



<script src="https://kit.fontawesome.com/dbefa9deda.js" crossorigin="anonymous">
</script>

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