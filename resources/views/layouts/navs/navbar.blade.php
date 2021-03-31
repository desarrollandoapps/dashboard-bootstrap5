<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow-sm">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        {{ __('App name') }}
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search" @yield('hidden-search')>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            @guest
              <a class="btn btn-outline-primary btn-sm btn-block" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            @else
                <div class="float-right">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            @endguest
        </li>
    </ul>
</header>