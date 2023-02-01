<!-- Código para tener la id del usuario -->
@if(Auth::check())
    <meta name="user-id" content="{{ Auth::user()->id }}">
    <meta name='userag' content="{{ Auth::user()->tipo_usuario }}">
@endif

<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand text-warning display-1" href="{{ route('home') }}">
            ENLAZA-TEA 
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Bienvenido') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Mi perfil') }}</span>
                    </a>
                    <a href="{{route('avisoPrivacidad')}}" class="dropdown-item">
                        <i class="ni ni-single-copy-04"></i>
                        <span>Aviso de Privacidad</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Cerrar Sesión') }}</span>
                    </a>
                   </div>   
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <!-- Familiar -->
                @if (auth()->user()->tipoUsuario=="1")
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Texto') }}">
                      <i class="ni ni-chart-pie-35 text-default"></i>
                      <span class="nav-link-text">Texto</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Texto') }}">
                      <i class="ni ni-user-run text-default"></i>
                      <span class="nav-link-text">Texto</span>
                    </a>
                </li>
                @endif

                <!-- Especialista -->
                @if(auth()->user()->tipoUsuario=="2")
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Texto') }}">
                      <i class="ni ni-chart-pie-35 text-default"></i>
                      <span class="nav-link-text">Texto</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Texto') }}">
                      <i class="ni ni-user-run text-default"></i>
                      <span class="nav-link-text">Texto</span>
                    </a>
                </li>
                @endif

                <!-- ADMINISTRADOR -->
                @if (auth()->user()->tipoUsuario=="0")
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('familiares') }}">
                      <i class="ni ni-satisfied text-default"></i>
                      <span class="nav-link-text">Administrar familiares</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pacientes') }}">
                      <i class="ni ni-building text-default"></i>
                      <span class="nav-link-text">Administrar pacientes</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservas') }}">
                      <i class="ni ni-user-run text-default"></i>
                      <span class="nav-link-text"> Administrar reservas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Texto') }}">
                      <i class="ni ni-chart-pie-35 text-default"></i>
                      <span class="nav-link-text">Texto</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Texto') }}">
                      <i class="ni ni-user-run text-default"></i>
                      <span class="nav-link-text">Texto</span>
                    </a>
                </li>
                @endif
            </ul>

            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/components/alerts.html">
                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
