
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Alcaldia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>


<body data-sidebar="dark">

<div id="layout-wrapper">
    @include('layouts.admin.components.navbar')

    @include('layouts.admin.components.sidebar')

    <div class="main-content">

        <div class="page-content">
            <!-- puedo poner lo que quiera, antes tenia los A HREF
            <a href="{{ route('localidad.index') }}" class="btn btn-danger">Localidad</a>
                <h4><a href="{{ route('localidad.index') }}">Index Localidad</a></h4>
                <h4><a href="{{ route('equipo.index') }}">Index Equipo</a></h4>
                <h4><a href="{{ route('jugador.index') }}">Index Jugador</a></h4>-->
            @yield('content')
        </div>


        @include('layouts.admin.components.footer')
    </div>
    <!-- end main content-->

</div>

<div class="rightbar-overlay"></div>

<script src="{{ url('js/app.js') }}"></script>

</body>
</html>
