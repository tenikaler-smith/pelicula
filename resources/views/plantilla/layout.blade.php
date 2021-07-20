<!doctype html>
<html lang="en">

<head>

    @include("plantilla.head")

</head>

<body class="bg-dark">
    <div class="container">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    @include("plantilla.header")

    @yield("contenido")

    @include("plantilla.footer")

    </div>

    @include('plantilla.script')

</body>

</html>
