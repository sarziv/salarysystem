<nav class="nav-side-menu">
    <div class="brand" style="font-size: large; font-family: 'Titan One', cursive;"><b>{{ config('app.name', 'Laravel') }}</b></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list text-center">
        @if (!Auth::guest())
        <ul id="menu-content" class="menu-content collapse out">
            <li style="border-top: 1px solid #23282e;">
                <a class="dblock" href="/home">
                    <i class="fa fa-info fa-lg"></i> Informacija
                </a>
            </li>

            <li>
                <a class="dblock" href="/add">
                    <i class="fa fa-plus fa-lg"></i> Skaičiuotuvas
                </a>
            </li>
            <li>
                <a class="dblock" href="/memo">
                    <i class="fa fa-book fa-lg"></i> Priminimai
                </a>
            </li>
            <li>
                <a class="dblock" href="/tracker">
                    <i class="fab fa-stack-overflow fa-lg"></i> Istorija
                </a>
            </li>
            <li>
                <a class="dblock" href="/manage">
                    <i class="fa fa-list-alt fa-lg"></i> Atlyginimas
                </a>
            </li>
            @endif

            @if (Auth::guest())
            <li style="border-top: 1px solid #23282e;">
                <a class="dblock" href="{{ route('login') }}">
                    <i class="fa fa-sign-in-alt fa-lg"></i> Prisijungti
                </a>
            </li>
            <li>
                <a class="dblock"  href="{{ route('register') }}">
                    <i class="fa fa-user-plus fa-lg"></i> Registruotis
                </a>
            </li>
                <li>
                    <a class="dblock"  href="{{ route('admin') }}">
                        <i class="fa fa-unlock fa-lg" ></i> Administracija
                    </a>
                </li>
            @else
                <li>
                    <div class="dropdown show">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-sign-out-alt fa-lg"></i> Atsijungti
                        </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Patvirtinti atsijungima
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    </div>
                </li>
            @endif
        </ul>
    </div>

</nav>