<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{asset("assets/back/img/logo.png")}}" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1)==''?'active':'' }}" aria-current="page"
                            href="{{ route('index') }}">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1)=='catalog'?'active':'' }}"
                            href="{{ route('catalog.index') }}">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1)=='create'?'active':'' }}"
                            href="{{ Route('catalog.create') }}">Crear Pelicula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1)=='login'?'active':'' }}"
                            href="{{ route('user.login') }}">Iniciar Sessión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1)=='logout'?'active':'' }}"
                            href="{{route('user.logout')}}">Salir</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="buscar" aria-label="search" />
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>
