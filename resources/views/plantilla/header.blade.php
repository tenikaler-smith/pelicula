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
                            href="{{ route('index') }}">Inicio<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1)=='catalog'?'active':'' }}"
                            href="{{ route('catalog.index') }}">Catálogo
                        </a>
                    </li>


                    @if (session("rol")== 'admin')

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Administrador  {{-- {{session("nombre")}} --}}
                                </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ Route('catalog.create') }}"> Crear Pelicula
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)"></i> Crear Genero </a>
                                <a class="dropdown-item" href="javascript:void(0)"> Listar Genero </a>
                            </ul>
                        </li>
                    @endif


                    @if (session("rol")== 'tenismith')

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mis Compra
                            </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="javascript:void(0)"> Ver Factura</a>
                            <a class="dropdown-item" href="javascript:void(0)"></i> Ver Pelicula </a>
                        </ul>
                    </li>


                    @endif



                    <form class="d-flex px-5">
                        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="search" />
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </ul>






                <!-- perfil de usuario -->
                <ul class="navbar-nav float-end">
                    @if (!session("nombre"))
                        <li class="nav-item p-1">
                            <a class="nav-link {{ Request::segment(1)=='login'?'active':'' }} btn btn-light text-secondary"
                                href="{{ route('user.login') }}">Iniciar Sesión
                            </a>
                        </li>
                        <li class="nav-item p-1">
                            <a class="nav-link {{ Request::segment(1)   =='create'?'active':'' }} btn btn-primary"
                                href="{{ route('user.create') }}">Registro
                            </a>
                        </li>
                    @endif

                    @if (session("rol")== 'tenismith')
                    <li class="nav-item px-2">
                        <a class="nav-link position-relative {{Request::segment(1)=='carrito'?'active':''}}" href="javascript:void(0)"><i class="fas fa-shopping-cart me-1 ms-1"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger navbar-badge">
                                0
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    @endif

                    @if (session("nombre"))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset("assets/back/img/user/user.png")}}" alt="user" class="rounded-circle" width="32" height="32" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Registrado como {{session("nombre")}} ">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route("user.edit")}}">
                                <img src="{{asset("assets/back/img/user/user.png")}}" alt="user" class="rounded-circle" width="64" height="64">
                                {{session("nombre")}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i> My Balance</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#modalSalir" href="#"><i class="fa fa-power-off me-1 ms-1"></i> Cerrar Sesión</a>
                        </ul>
                    </li>
                    @endif

                </ul>
                <!-- perfil de usuario -->
                <!-- Modal -->
                <div class="modal fade" id="modalSalir" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>¿Esta seguro que desea salir?</p>
                                <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</a>
                                <a type="button" class="btn btn-primary" href="{{route('user.logout')}}">si</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</header>
